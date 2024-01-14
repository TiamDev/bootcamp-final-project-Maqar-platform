<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'fileType_id',
        'Target_id',
        'type'
    ];
}
