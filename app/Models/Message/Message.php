<?php

namespace App\Models\Message;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'user_id',
    ];
}
