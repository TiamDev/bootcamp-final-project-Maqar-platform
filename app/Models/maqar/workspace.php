<?php

namespace App\Models\maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workspace extends Model
{
    use HasFactory;
    protected $table = 'workspaces';

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function workspaceType()
    {
        return $this->belongsTo(WorkspaceType::class, 'workspaceType_id');
    }

    public function workspaceOffers()
    {
        return $this->hasMany(WorkspaceOffer::class);
    }
}
