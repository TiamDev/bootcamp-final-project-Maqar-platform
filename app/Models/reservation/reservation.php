<?php

namespace App\Models\reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'workspaceoffer_id',
        'state_id',
        'voucher_id',
        'start_date',
        'end_date'
    ];
}
