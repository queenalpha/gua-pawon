<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_article';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover',
        'id_categories',
        'view_count',
        'likes',
        'is_draft',
    ];

    protected static function booted()
    {
        static::updating(function ($article) {
            if ($article->isDirty('cover')) {
                $oldCover = $article->getOriginal('cover');
                if ($oldCover && Storage::disk('public')->exists($oldCover)) {
                    Storage::disk('public')->delete($oldCover);
                }
            }

            static::cleanupUnusedImages($article);
        });

        // Hapus file hanya saat hard delete (forceDelete)
        static::forceDeleted(function ($article) {
            static::deleteAllImages($article);

            if ($article->cover && Storage::disk('public')->exists($article->cover)) {
                Storage::disk('public')->delete($article->cover);
            }
        });
    }

    protected static function cleanupUnusedImages($article)
    {
        $oldContent = $article->getOriginal('content');
        $newContent = $article->content;

        $oldImages = self::extractImagePaths($oldContent);
        $newImages = self::extractImagePaths($newContent);

        $deletedImages = array_diff($oldImages, $newImages);

        foreach ($deletedImages as $path) {
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }

    protected static function deleteAllImages($article)
    {
        $images = self::extractImagePaths($article->content);

        foreach ($images as $path) {
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }

    protected static function extractImagePaths($content): array
    {
        // Ambil src dari <img> dalam konten
        preg_match_all('/<img[^>]+src="[^"]*\/storage\/([^"]+)"/i', $content, $matches);

        return $matches[1] ?? [];
    }

    // Jika ingin mengambil artikel yang masih aktif (belum di-soft delete)
    public function scopeActive($query)
    {
        return $query->whereNull('deleted_at');
    }

    // Jika ingin mengambil artikel yang sudah di-soft delete
    public function scopeTrashed($query)
    {
        return $query->whereNotNull('deleted_at');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories');
    }
}
