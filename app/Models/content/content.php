<?php

namespace App\Models\content;

use App\Models\maqar\provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'title',
        'description',
        'type',
    ];
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
