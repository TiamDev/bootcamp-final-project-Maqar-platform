<?php

namespace App\Http\Controllers\JoinRequest;

use App\Http\Controllers\Controller;
use App\Http\Requests\JoinRequest;
use Illuminate\Http\Request;
use App\Models\Location\Governorate;
use App\Models\Location\Directorate;
use App\Models\maqar\Provider;
use App\Models\Account\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\ViewModels\JoinRequest as joinVM;

class JoinRequestController extends Controller
{
    public function index()
    {
        $providers = Provider::paginate(1);
        return view('platform.JoinRequest.index', compact('providers'));
    }
    public function view(string $name)
    {
        $provider = Provider::where('name', $name)->first();;
        $user = User::findOrFail($provider->user_id);
        $directorate = Directorate::findOrFail($provider->directorate_id)->first();
        $governorate = Governorate::findOrFail($directorate->governorate_id)->first();
        $viewModel = new joinVM($user, $provider, $directorate, $governorate);

        return view('platform.JoinRequest.view', compact('viewModel'));
    }
    public function confirm($name)
    {
        $provider = Provider::where('name', $name)->update(['state' => 'approved']);
        if ($provider > 0) {
            return redirect()->route('platform.joinRequest')->with('success', 'تم قبول الطلب بنجاح ');
        } elseif ($provider === 0) {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        } else {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        }
    }
    public function reject(Request $request, $name)
    {
        $provider = Provider::where('name', $name)->update(['state' => 'reject']);
        if ($provider > 0) {
            return redirect()->route('platform.joinRequest')->with('success', 'تم رفض الطلب بنجاح ');
        } elseif ($provider === 0) {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        } else {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        }
    }
    public function viewInformation()
    {

        $Governorates = Governorate::all();
        $Directorates = Directorate::all();

        return view('site.joinRequest.providerInfo', compact('Governorates', 'Directorates'));
    }
    public function storeInformation(Request $request)
    {
        // $rules = [
        //     'name' => 'required|unique:providers',
        //     'title' => 'required|unique:providers',
        //     'directorate_id' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'address' => 'required',
        //     'phone' => 'required',
        //     'tradeDocument' => 'required|file',
        //     'governorate' => 'required',
        //     'directorate' => 'required',
        //     'logo' => 'required|file',
        //     'identity-NO' => 'required'
        // ];
        // $messages = [
        //     'name.required' => ' .الحقل مطلوب',
        //     'name.unique' => '.الاسم موجود مسبقا',

        //     'title.required' => ' .الحقل مطلوب',

        //     'title.unique' => '.الاسم موجود مسبقا',

        //     'email.required' => ' .الحقل مطلوب',
        //     'email.unique' => '.الاسم موجود مسبقا',
        //     'email.email' => '.القيمة غير صالحة',
        //     'address.required' => ' .الحقل مطلوب',
        //     'phone.required' => ' .الحقل مطلوب',
        //     'tradeDocument.required' => ' .الحقل مطلوب',
        //     'governorate.required' => ' .الحقل مطلوب',
        //     'directorate.required' => ' .الحقل مطلوب',
        //     'logo.required' => ' .الحقل مطلوب',
        //     'logo.file' => '.القيمة غير صالحة',
        //     'tradeDocument.file' => '.القيمة غير صالحة',
        //     'identity_NO.required' => ' .الحقل مطلوب',
        //     'identity_NO.min' => ' .يجب ان لا يقل عن 15 حرف',
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);

        // // // Check if validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // $file = $request->file('logo');
        // $filename = $file . Carbon::now()->timestamp;
        // $path = $file->store('public/upload/provider');

        // $file_tradeDocument = $request->file('tradeDocument');
        // $filename_tradeDocument = $file_tradeDocument . Carbon::now()->timestamp;
        // $path_tradeDocument = $file_tradeDocument->store('public/upload/provider');

        // $file = $request->file('logo');
        // $filename = $file->getClientOriginalName() . '_' . Carbon::now()->timestamp;
        // $path = $file->storeAs('public/upload/provider', $filename);

        // // ...

        // $file_tradeDocument = $request->file('tradeDocument');
        // $filename_tradeDocument = $file_tradeDocument->getClientOriginalName() . '_' . Carbon::now()->timestamp;
        // $path_tradeDocument = $file_tradeDocument->storeAs('public/upload/provider', $filename_tradeDocument);

        // $user = User::where('user_id', $request->id)->first();
        // dd($user->name);
        Provider::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'identity_NO' => $request->identity_NO,
            'phone' => $request->phone,
            'tradeDocument' => $request->file('tradeDocument')->getClientOriginalName(),
            'user_id' => Auth::id(),
            'logo' => $request->file('logo')->getClientOriginalName(),
            'directorate_id' => $request->input('directorate'),
            'state' => "step1",

        ]);
        Auth::logout();
        return redirect()->route('providerDetails');
        // $file = $request->file('logo')->getClientOriginalName();
        //  return $file;
    }
    public function viewDetails()
    {
        return view('site.joinRequest.providerDetails');
    }
    public function storeDetails()
    {
        return view('site.joinRequest.providerInfo');
    }
}
