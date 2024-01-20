<?php

namespace App\Http\Controllers\Maqar;

use App\Http\Controllers\Controller;
use App\Models\Account\User;
use App\Models\maqar\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::where('state', '=', 'complete')->paginate(16);
        return view('platform.offices.index', compact('providers'));
    }
    public function view($name)
    {
        $provider = Provider::where('name', $name)->first();
        $user = User::find($provider->user_id);
        return view('platform.offices.view', compact('provider', 'user'));
    }
}
