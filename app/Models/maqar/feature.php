<?php

namespace App\Models\maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maqar\Provider;

class feature extends Model
{
    protected $fillable = [
        'name',
        'provider_id',
    ];
    use HasFactory;
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
