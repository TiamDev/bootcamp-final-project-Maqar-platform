<?php

namespace App\Models\maqar;

use App\Models\Account\User;
use App\Models\maqar\service;
use App\Models\maqar\feature;
use App\Models\content\content;
use App\Models\payment\payment;
use App\Models\Location\directorate;
use App\Models\reservation\reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'directorate_id',
        'name',
        'title',
        'email',
        'address',
        'currency',
        'phone',
        'logo',
        'tradeDocument',
        'identity_NO',
        'state',
        'startWorkHour',
        'endWorkHour',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function directorate()
    {
        return $this->belongsTo(directorate::class, 'directorate_id');
    }
    // protected $table = 'providers';

    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }
    public function services()
    {
        return $this->hasMany(service::class);
    }
    public function features()
    {
        return $this->hasMany(feature::class);
    }
    public function contents()
    {
        return $this->hasMany(Content::class, 'provider_id');
    }
    public function reservations()
    {
        return $this->hasMany(reservation::class);
    }
    public function payments()
    {
        return $this->hasMany(payment::class);
    }
}
