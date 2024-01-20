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
use App\Mail\WelcomeEmail;
use APP\Mail\RejectMail;

use Illuminate\Support\Facades\Mail;

class JoinRequestController extends Controller
{
    public function index()
    {
        $providers = Provider::where('state', '!=', 'complete')->paginate(16);

        return view('platform.JoinRequest.index', compact('providers'));
    }
    public function view(string $name)
    {
        // $provider = Provider::where('name', $name)->first();;
        // $user = User::findOrFail($provider->user_id);
        // $directorate = Directorate::findOrFail($provider->directorate_id)->first();
        // $governorate = Governorate::findOrFail($directorate->governorate_id)->first();
        // $viewModel = new joinVM($user, $provider, $directorate, $governorate);

        // return view('platform.JoinRequest.view', compact('viewModel'));
        $provider = Provider::where('name', $name)->first();
        $user = User::find($provider->user_id);
        return view('platform.JoinRequest.view', compact('provider', 'user'));
    }
    public function confirm($name)
    {
        $provider = Provider::where('name', $name)->update(['state' => 'approved']);
        $provider_obj = Provider::where('name', $name)->first();
        $user = User::where("id", $provider_obj->user_id)->first();
        if ($provider > 0) {
            return redirect()->back()->with('success', 'تم قبول الطلب بنجاح ');
            Mail::to('fatimabakar707@gmail.com')->send(new RejectMail('تم قبول الطلب بنجاح '));
        } elseif ($provider === 0) {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        } else {
            return redirect()->route('platform.joinRequest')->with('error', 'هناك خطا ما');
        }
    }
    public function reject(Request $request, $name)
    {
        $provider = Provider::where('name', $name)->update(['state' => 'reject']);
        $provider_obj = Provider::where('name', $name)->first();
        $user = User::where("id", $provider_obj->user_id)->first();
        if ($provider > 0) {
            return redirect()->back()->with('success', 'تم رفض الطلب بنجاح ');
            Mail::to('fatimabakar707@gmail.com')->send(new RejectMail($request->rejectMessage));
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

        // $user = User::where('id', $request->id)->first();
        // dd(Auth::user());
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $extension = $logo->getClientOriginalExtension();
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageNameLogo = $currentDate . '_' . $logo->getClientOriginalName();
            $logo->storeAs('logo', $newImageNameLogo, 'public');
        }
        if ($request->hasFile('tradeDocument')) {
            $tradeDocument = $request->file('tradeDocument');
            $extension = $tradeDocument->getClientOriginalExtension();
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageNametrade = $currentDate . '_' . $tradeDocument->getClientOriginalName();
            $tradeDocument->storeAs('tradeDocument', $newImageNametrade, 'public');
        }
        Provider::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'identity_NO' => $request->identity_NO,
            'phone' => $request->phone,
            'tradeDocument' => $newImageNametrade,
            'user_id' => Auth::id(),
            'logo' => $newImageNameLogo,
            'directorate_id' => $request->input('directorate'),
            'state' => "step1",

        ]);
        Auth::logout();
        return redirect()->route('platform.joinRequest.joinMessage');
        // $file = $request->file('logo')->getClientOriginalName();
        //  return $file;
    }
    public function joinMessage()
    {
        return view('site.joinRequest.joinMessage');
    }
    public function underReview()
    {
        return view('site.joinRequest.underReview');
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
