<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories');
    }
}
