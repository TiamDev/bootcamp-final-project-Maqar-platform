<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Account\User;
use App\Models\Location\governorate;
use App\Models\maqar\Provider;
use App\Models\maqar\WorkspaceDuration;
use App\Models\Maqar\WorkspaceType;
use App\Models\reservation\reservation;
use App\Models\Role;

use App\Services\Account\AccountService;

class SigninController extends Controller
{

    // public function __construct(private AccountService $service){}

    public function view(Request $request)
    {
        if (Auth::check()) {
            // User is already signed in, redirect to a different page
            return redirect()->route('platform.dashboard');
        }
        return view('site/account/signin')->with('request', $request);;
    }

    public function authenticate(Request $request)
    {

        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
        // Define custom error messages
        $messages = [
            'email.required' => 'الحقل مطلوب',
            'email.email' => 'عنوان بريد إلكتروني غير صحيح',
            'password.required' => 'الحقل مطلوب',
            'password.min' => 'يجب أن لا يقل عن 6 أحرف',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);



        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();



        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'المستخدم غير موجود'])->withInput();
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'كلمة المرور غير صحيحة'])->withInput();
        }



        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $user = Auth::user();
            if ($user->roles->contains('name', 'super-admin')) {
                $userCount = User::count();
                $providersCount = Provider::count();
                $reservationCount = reservation::count();
                return view('platform.dashboard', compact('userCount', 'providersCount', 'reservationCount'));
                // return view('platform.dashboard');
            } else if ($user->roles->contains('name', 'admin')) {
                $exists = Provider::where('user_id', $user->id)->exists();
                if (!$exists) {
                    // if (Auth::attempt($credentials)) {
                    //     $request->session()->regenerate();
                    return redirect()->route('providerInfo');
                    // }
                } else {
                    // $user = User::find(Auth::id());
                    $providerStatus = $user->provider->state;
                    if ($providerStatus == 'step1') {
                        Auth::logout();
                        return redirect()->route('platform.joinRequest.underReview');
                    } elseif ($providerStatus == 'approved') {
                        return redirect()->route('tenant');
                    } elseif ($providerStatus == 'reject') {
                        Auth::logout();
                        // return redirect()->route('tenant');
                        return view('site.joinRequest.rejectMessage');
                    } elseif ($providerStatus == 'complete') {
                        if (Auth::attempt($credentials)) {
                            $request->session()->regenerate();
                            return redirect()->route('tenant');
                        }
                    }
                }
            } else if ($user->roles->contains('name', 'reception')) {
                // User has the 'admin' role, show an error message or redirect
                return redirect()->route('tenant');
            } else if ($user->roles->contains('name', 'content-admin')) {
                // User has the 'admin' role, show an error message or redirect
                return redirect()->route('tenant');
            } else if ($user->roles->contains('name', 'client')) {
                // User has the 'admin' role, show an error message or redirect
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    $workspaceTypes = WorkspaceType::all();
                    $workspaceDurations = WorkspaceDuration::all();
                    $governorates = governorate::all();
                    return view('client.dashboard', compact('workspaceTypes', 'workspaceDurations', 'governorates'));
                }
            }
        }

        //يرجعني للداشبورد
        return redirect()->back()->withErrors(['email' => 'حدثت مشكلة أثناء تسجيل الدخول'])->withInput();
    }
}
