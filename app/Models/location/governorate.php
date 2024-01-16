<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class governorate extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;
    public function directorates()
    {
        return $this->hasMany(Directorate::class, 'governorate_id');
    }
}
