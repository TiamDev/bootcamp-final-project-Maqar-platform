<?php

namespace App\Models\maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maqar\Provider;

class Service extends Model
{
    use HasFactory;
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
