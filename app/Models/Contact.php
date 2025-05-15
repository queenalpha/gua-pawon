<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_contact';

    protected $fillable = [
        'name',
        'email',
        'telp',
        'subject',
        'messages',
        'is_answer',
        'reply'
    ];
}
