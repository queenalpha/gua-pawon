<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_research';

    protected $fillable = [
        'title',
        'abstract',
        'author',
        'publish_date',
        'url_doi',
    ];
}
