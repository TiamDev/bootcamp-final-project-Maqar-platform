<?php

namespace App\Models\reservation;

use App\Models\Account\User;
use App\Models\maqar\workspaceOffer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reservation\state;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'workspaceoffer_id',
        'state_id',
        'voucher',
        'officPrice',
        'start_date',
        'end_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workspaceOffer()
    {
        return $this->belongsTo(workspaceOffer::class, 'workspaceoffer_id');
    }
    public function workspace()
    {
        return $this->belongsTo(WorkspaceOffer::class, 'workspaceoffer_id')->with('workspace');
    }
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
