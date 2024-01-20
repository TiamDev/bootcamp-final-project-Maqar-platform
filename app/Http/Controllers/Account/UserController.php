<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account\User;
use App\Models\Location\governorate;
use App\Models\maqar\Provider;
use App\Models\maqar\workspace;
use App\Models\maqar\WorkspaceDuration;
use App\Models\Maqar\WorkspaceType;
use App\Models\reservation\reservation;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('back.account.users.index');
    }
    public function clientDashboard()
    {
        $workspaceTypes = WorkspaceType::all();
        $workspaceDurations = WorkspaceDuration::all();
        $governorates = governorate::all();


        return view('client.dashboard', compact('workspaceTypes', 'workspaceDurations', 'governorates'));
    }
    public function tenantDashboard()
    {
        $provider = Provider::where('user_id', Auth::id())->first();
        $workspaces = Workspace::withCount('provider_id')->where('provider_id', $provider->id)->get();
        dd($workspaces);
        return view('tenant.dasboard', compact('provider'));
    }
    public function platformDashboard()
    {
        $userCount = User::count();

        $providersCount = Provider::count();
        $reservationCount = reservation::count();
        return view('platform.dashboard', compact('userCount', 'providersCount', 'reservationCount'));
    }
}
