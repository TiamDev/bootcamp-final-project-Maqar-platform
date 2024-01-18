<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialMedia extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'link',
        'type',
    ];
}
