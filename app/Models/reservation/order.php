<?php

namespace App\Models\reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'service_id',
        'quantity',
        'price'
    ];
}
