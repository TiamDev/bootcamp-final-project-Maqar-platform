<?php

namespace App\Models\maqar;

use App\Models\reservation\reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workspaceOffer extends Model
{
    use HasFactory;
    protected  $fillable = [
        'workspace_id',
        'workspaceDuration_id',
        'price',
    ];
    protected $table = 'workspace_offers';

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function workspaceDuration()
    {
        return $this->belongsTo(WorkspaceDuration::class, 'workspaceDuration_id');
    }
    public function reservations()
    {
        return $this->hasMany(reservation::class, 'workspaceoffer_id');
    }
}
