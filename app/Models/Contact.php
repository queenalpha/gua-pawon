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
        'messages',
        'is_answer',
    ];

    // Method to send a reply via email
    public function sendReply($replyMessage)
    {
        // Here you can send an email to the user who contacted you
        // You could use Laravel's Mail functionality or any custom email logic here
    }
}
