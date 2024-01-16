<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorate extends Model
{
    protected $fillable = [
        'name',
        'governorate_id',
    ];
    use HasFactory;
    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }
}
