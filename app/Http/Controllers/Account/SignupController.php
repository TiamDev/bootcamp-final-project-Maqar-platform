<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;
use App\Models\Account\User;
use App\Models\Account\Role;



class SignupController extends Controller
{
    //

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('site/account/signup');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignupRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();
        $roleId = $role->id;
        $user->roles()->attach($roleId);
        $user->save();
        return redirect()->route('signin');
    }
}
