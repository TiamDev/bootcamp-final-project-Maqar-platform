<?php

namespace App\Models\reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'title',
    ];
}
