<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SearchRequest;
use App\Models\Account\User;
use App\Models\content\socialMedia;
use Illuminate\Http\Request;
use App\Models\Location\Governorate;
use App\Models\Location\Directorate;
use App\Models\Maqar\Provider;
use App\Models\maqar\workspace;
use App\Models\maqar\workspaceType;
use App\Models\maqar\WorkspaceDuration;
use App\Models\maqar\workspaceOffer;
use App\Models\file\File;
use App\ViewModels\workspaceImage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $governorates = Governorate::all();
        // $directorates = Directorate::where('governorate_id', 1);
        $workspaceTypes = workspaceType::all();
        $workspaceDurations = WorkspaceDuration::all();
        $providers = Provider::where('state', 'complete')->get();
        return view('/site/home', compact('governorates', 'workspaceDurations', 'workspaceTypes', 'providers'));
    }
    public function search(SearchRequest $request)
    {
        $validatedData = $request->validated();
        $workspaceOffers = WorkspaceOffer::where('workspaceDuration_id', $request->workspaceDuration_id)
            ->whereHas('workspace', function ($query) use ($request) {
                $query->where('workspaceType_id', $request->workspace_type)
                    ->whereHas('provider', function ($query) use ($request) {
                        $query->whereHas('directorate', function ($query) use ($request) {
                            $query->where('directorate_id', $request->directorate_id);
                        });
                    });
            })
            ->with(['workspace' => function ($query) use ($request) {
                $query->where('workspaceType_id', $request->workspace_type)
                    ->with(['provider' => function ($query) {
                        $query->with('directorate');
                    }]);
            }])
            ->get();


        $currentDate = Carbon::now()->toDateString();
        $workspaceImages = [];
        foreach ($workspaceOffers as $key => $workspaceOffer) {
            $workspaceoffer = $workspaceOffer;
            $workspace = $workspaceOffer->workspace;
            $image = File::where('target_id', $workspaceOffer->Workspace->id)
                ->where('type', 'workspace')
                ->first()->path ?? '20240118_062834_pexels-max-rahubovskiy-7534224.jpg';
            $workspaceImage = new workspaceImage;
            $workspaceImage->save($workspace, $image, $workspaceoffer);
            $workspaceImages[] = $workspaceImage;
        }
        return view('site/workspaces', compact('workspaceImages', 'currentDate'));
    }

    public function details(Request $request)
    {

        return view('site.workspaceDetiles', compact('workspaceOffer'));
    }

    public function providerSite($name)
    {
        $provider = Provider::where('name', $name)->first();
        if ($provider) {
            $user = User::find($provider->user_id);
            if ($user) {
                $images = File::where('Target_id', $provider->id)->where('type', 'provider')
                    ->get();
                $socialAccounts = socialMedia::where('user_id', $user->id)->get();
            } else {
                return response()->view('errors.404', [
                    'message' => 'الصفحة غير موجودة',
                ], 404);
            }
        } else {
            return response()->view('errors.404', [
                'message' => 'الصفحة غير موجودة',
            ], 404);
        }
        return view('tenant/home', compact('provider', 'images', 'socialAccounts'));
    }
    public function getDirectorates(Request $request)
    {
        $governorateId = $request->input('governorate_id');

        // جلب المدن المرتبطة بالمحافظة باستخدام القيمة $governorateId
        $directorates = Directorate::where('governorate_id', $governorateId)->get();

        return response()->json($directorates);
    }
    public function aboutMagar()
    {
        return view('site.aboutMagar');
    }
    public function viewDetails(Request $request)
    {
        if (Auth::check()) {
            $isBooked = -1;
            $workspaceOffer = workspaceOffer::find($request->id);
            if ($workspaceOffer) {
                $images = File::where('target_id', $workspaceOffer->Workspace->id)
                    ->where('type', 'workspace')
                    ->get();
                return view('site.workspaceDetiles', compact('workspaceOffer', 'isBooked', 'images'));
            } else {
                return response()->view('errors.404', [
                    'message' => 'الصفحة غير موجودة',
                ], 404);
            }
        } else {
            return view('site.account.signin');
        }
    }
}
