<?php

namespace App\Models\maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workspaceOffer extends Model
{
    use HasFactory;
    protected $table = 'workspace_offers';

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function workspaceDuration()
    {
        return $this->belongsTo(WorkspaceDuration::class, 'workspaceDuration_id');
    }
}
