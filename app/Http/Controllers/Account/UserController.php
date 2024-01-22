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
use Illuminate\Support\Facades\DB;

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
        // dd($workspaceTypes);
        $workspaceDurations = WorkspaceDuration::all();
        $governorates = governorate::all();


        return view('client.dashboard', compact('workspaceTypes', 'workspaceDurations', 'governorates'));
    }
    public function tenantDashboard()
    {
        $provider = Provider::where('user_id', Auth::id())->first();
        $reservations = DB::table('reservations')
            ->join('workspace_offers', 'reservations.workspaceoffer_id', '=', 'workspace_offers.id')
            ->join('workspaces', 'workspace_offers.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->select('reservations.*')
            ->where('providers.id', $provider->id)
            ->get();
        $customers = DB::table('reservations')
            ->join('workspace_offers', 'reservations.workspaceoffer_id', '=', 'workspace_offers.id')
            ->join('workspaces', 'workspace_offers.workspace_id', '=', 'workspaces.id')
            ->join('providers', 'workspaces.provider_id', '=', 'providers.id')
            ->select('reservations.user_id')
            ->where('providers.id', $provider->id)
            ->distinct()
            ->get();
        $reservationsCount = $reservations->count();
        $countCustomers = $customers->count();
        $workspaces = Workspace::where('provider_id', $provider->id)->get()->count();
        return view('tenant.dashboard', compact('workspaces', "provider", 'reservationsCount', 'countCustomers'));
    }
    public function platformDashboard()
    {
        $userCount = User::count();

        $providersCount = Provider::count();
        $reservationCount = reservation::count();
        return view('platform.dashboard', compact('userCount', 'providersCount', 'reservationCount'));
    }
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('platform.profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back()->with('update', 'تم تحديث البيانات بنجاح');
    }
}
