<?php


namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Location\governorate;
use App\Models\Maqar\Feature;
use Illuminate\Support\Facades\Auth;
use App\Models\Maqar\Provider;
use App\Models\maqar\Service;
use App\Models\Maqar\Workspace;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $tenant = Auth()->id();
        if (!Auth::check() || !Auth::user()->roles->contains('name', 'admin')) {
            abort(403, "Unauthorized");
        }
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->first();
        $features = Feature::where('provider_id', $provider->id)->get();
        $services = Service::where('provider_id', $provider->id)->get();
        $governorates = Governorate::all();
        return view('tenant.content.index', compact('provider', 'features', 'services', 'governorates'));
    }


    public function addFeature()
    {
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->first();
        return view('tenant.content.addFeature', compact('provider'));
    }
    public function createFeature(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
        ];

        $messages = [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.min' => 'يجب أن يكون طول الاسم على الأقل 5 أحرف.',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Feature::create([
            'name' => $request->name,
            'provider_id' => $request->provider_id,

        ]);
        return redirect()->back()->with('success', 'تمت اضافة المرفق بنجاح');
    }
    public function addService()
    {
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->first();
        return view('tenant.content.addService', compact('provider'));
    }
    public function createService(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'price' => 'required|numeric'
        ];

        $messages = [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.min' => 'يجب أن يكون طول الاسم على الأقل 5 أحرف.',
            'price.required' => 'حقل الاسم مطلوب.',
            'price.numeric' => 'قيمة السعر غير صالحة، يرجى إدخال قيمة عددية صحيحة.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'provider_id' => $request->provider_id,

        ]);
        return redirect()->back()->with('success', 'تمت اضافة الخدمة بنجاح');
    }
    public function contactus(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'phone' => 'required|number'
        ];

        $messages = [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.email' => 'الصيغة غير صحيحة',
            'phone.required' => 'حقل الاسم مطلوب.',
            'phone.number' => 'قيمة غير صالحة.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        return redirect()->back()->with('success', 'تمت اضافة الخدمة بنجاح');
    }
}
