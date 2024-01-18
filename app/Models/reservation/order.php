<?php

namespace App\Models\reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maqar\Service;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'service_id',
        'quantity',
        'price'
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
