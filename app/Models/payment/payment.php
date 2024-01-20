<?php

namespace App\Models\payment;

use App\Models\maqar\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'name',
        'number',
    ];
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
