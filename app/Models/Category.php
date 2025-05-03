<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['category_name'];

    public $timestamps = false;


    public function getTranslatedNameAttribute()
    {
        return __('articles/category.' . $this->category_name);
    }


    public function articles()
    {
        return $this->hasMany(Article::class, 'id_categories');
    }
}
