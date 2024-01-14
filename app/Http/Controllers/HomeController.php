<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use App\Models\Location\Governorate;
use App\Models\Location\Directorate;
use App\Models\Maqar\Provider;
use App\Models\maqar\workspace;
use App\Models\maqar\workspaceType;
use App\Models\maqar\WorkspaceDuration;
use App\Models\maqar\workspaceOffer;

class HomeController extends Controller
{
    public function index()
    {
        $governorates = Governorate::all();
        // $directorates = Directorate::where('governorate_id', 1);
        $workspaceTypes = workspaceType::all();
        $workspaceDurations = WorkspaceDuration::all();
        return view('/site/home', compact('governorates', 'workspaceDurations', 'workspaceTypes'));
    }
    public function search(SearchRequest $request)
    {
        $validatedData = $request->validated();
        $workspaceOffers = WorkspaceOffer::where('workspaceDuration_id', $request->workspaceDuration_id)
            ->whereHas('workspace', function ($query) use ($request) {
                $query->where('workspaceType_id', $request->workspace_type);
            })
            ->with('workspace')
            ->get();

        return view('site/workspaces', compact('workspaceOffers'));
    }

    public function details(Request $request)
    {
        $workspaceOffer = workspaceOffer::where('id', $request->id)->first();
        // $workspace = Workspace::where('name', $request->name)->first();
        // $workspaceDuration = WorkspaceDuration::where('id', $request->duration)->first()->name;
        // session()->put('workspaceDuration', $workspaceDuration);
        // dd($workspaceOffer->workspace->name);
        return view('site.workspaceDetiles', compact('workspaceOffer'));
    }




    public function getDirectorates(Request $request)
    {
        $governorateId = $request->input('governorate_id');

        // جلب المدن المرتبطة بالمحافظة باستخدام القيمة $governorateId
        $directorates = Directorate::where('governorate_id', $governorateId)->get();

        return response()->json($directorates);
    }
}
