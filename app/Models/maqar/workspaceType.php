<?php

namespace App\Models\Maqar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label',
        'description'
    ];
    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }
}
