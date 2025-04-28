<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

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
        static::deleting(function ($article) {
            // Menghapus gambar yang disisipkan dalam content
            preg_match_all('/<figure[^>]*>.*?<img[^>]+src=["\'](.*?)["\'][^>]*>.*?<\/figure>/is', $article->content, $matches);

            // Jika ada gambar yang disisipkan, hapus file gambar
            foreach ($matches[1] as $image) {
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories');
    }
}
