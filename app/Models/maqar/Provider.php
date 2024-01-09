<?php

namespace App\Models\maqar;

use App\Models\Account\User;
use App\Models\maqar\service;

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
    // protected $table = 'providers';

    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }
    public function services()
    {
        return $this->hasMany(service::class);
    }
}
