<?php

namespace App\Models\maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceDuration extends Model
{
    use HasFactory;
    protected $table = 'workspace_durations';
    protected $fillable = [
        'name',
        'title',
        'description',
    ];
    public function workspaceOffers()
    {
        return $this->hasMany(WorkspaceOffer::class);
    }
}
