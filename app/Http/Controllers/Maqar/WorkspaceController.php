<?php

namespace App\Http\Controllers\Maqar;

use App\Http\Controllers\Controller;
use App\Models\maqar\Provider;
use App\Models\maqar\workspace;
use App\Models\maqar\WorkspaceDuration;
use App\Models\maqar\workspaceOffer;
use App\Models\Maqar\WorkspaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\File\File;
use App\ViewModels\workspaceImage;

class WorkspaceController extends Controller
{
    public function index()
    {
        $tenant = Auth()->id();
        if (!Auth::check() || !Auth::user()->roles->contains('name', 'admin')) {
            abort(403, "Unauthorized");
        }
        $workspaceImages = [];
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->first();
        $workspaces = workspace::where('provider_id', $provider->id)->get();
        foreach ($workspaces as $key => $workspace) {
            $image = File::where('target_id', $workspace->id)
                ->where('type', 'workspace')
                ->first()->path ?? '20240118_062834_pexels-max-rahubovskiy-7534224.jpg';
            $workspaceImage = new workspaceImage;
            $workspaceImage->save($workspace, $image);
            $workspaceImages[] = $workspaceImage;
        };
        // $spaces = workspace::paginate(6);
        return view('tenant.spaces.index', compact('workspaceImages', 'provider'));
    }
    public function view(string $name)
    {
        $Workspace = Workspace::where('name', $name)->first();
        $images = File::where('target_id', $Workspace->id)
            ->where('type', 'workspace')
            ->get();
        return view('tenant.spaces.view', compact('Workspace', 'images'));
    }
    public function edit(string $name)
    {
        $Workspace = Workspace::where('name', $name)->first();

        $WorkspaceTypes = WorkspaceType::all();
        $WorkspaceDuration = WorkspaceDuration::all();
        return view('tenant.spaces.edit', compact('Workspace', 'WorkspaceTypes', 'WorkspaceDuration'));
    }
    // public function update(Request $request)
    // {
    //     // dd($request);
    //     $durations = WorkspaceDuration::all();
    //     foreach ($durations as $duration) {
    //         // dd($request->input(`$duration->name-check`));
    //         if ($request->has(`$duration->name-check`) && $request->input(`$duration->name-check`) == 'on') {
    //             $monthInput = $request->input(`$duration->name-input`);
    //             $existingWorkspaceOffer = WorkspaceOffer::where('workspaceDuration_id', $duration)
    //                 ->where('workspace_id', $request->id)
    //                 ->first();
    //             if ($existingWorkspaceOffer) {
    //                 // Update the existing workspace offer
    //                 $existingWorkspaceOffer->update([
    //                     // Update the necessary fields with the new values from the request
    //                     'price' => $monthInput,
    //                     // Add more fields as needed
    //                 ]);
    //             }
    //             // Create a new workspace offer
    //             WorkspaceOffer::create([
    //                 'workspaceDuration_id' => $duration,
    //                 'workspace_id' => $request->id,
    //                 'price' => $monthInput,
    //                 // Add more fields as needed
    //             ]);
    //         }
    //     }
    //     $workspace = workspace::find($request->id);
    //     $workspace->update([
    //         'label' => $request->input('label'),
    //         'description' => $request->input('description')
    //     ]);
    //     return redirect()->back()->with('message', 'تم التعديل بنجاح');

    //     // if ($request->has('month-check') && $request->input('month-check') == 'on') {
    //     //     $monthInput = $request->input('month-input');
    //     // }
    //     // $workspace = Workspace::find($request->id)->first();

    //     // if (!$workspace) {
    //     //     return redirect()->back()->with('error', 'نوع مساحة العمل غير موجود.');
    //     // }
    //     // $workspace->update([
    //     //     'label' => $request->input('label'),
    //     //     'description' => $request->input('description')
    //     // ]);

    // }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $workspace = Workspace::findOrFail($id);
        $durations = WorkspaceDuration::all();
        foreach ($durations as $duration) {
            if ($request->has($duration->name . '-check') && $request->input($duration->name . '-check') == 'on') {
                $monthInput = $request->input($duration->name . '-input');
                $existingWorkspaceOffer = WorkspaceOffer::where('workspaceDuration_id', $duration->id)
                    ->where('workspace_id', $request->id)
                    ->first();
                if ($existingWorkspaceOffer) {
                    $existingWorkspaceOffer->update([
                        'price' => $monthInput,
                    ]);
                } else {
                    WorkspaceOffer::create([
                        'workspaceDuration_id' => $duration->id,
                        'workspace_id' => $request->id,
                        'price' => $monthInput,
                    ]);
                }
            }
        }
        $workspace->title = $request->input('title');
        $workspace->name = $request->input('name');
        $workspace->description = $request->input('description');
        $workspace->maxPeople = $request->input('maxPeople');
        $workspace->area = $request->input('area');
        $workspace->workspaceType_id = $request->input('workspaceType_id');
        $workspace->save();

        return redirect()->back()->with('message', 'تم التعديل بنجاح');
    }
    public function add()
    {
        // Get tenant permissions only.
        $tenant = Auth()->id();
        if (!Auth::check() || !Auth::user()->roles->contains('name', 'admin')) {
            abort(403, "Unauthorized");
        }
        $id = auth()->user()->id;
        $provider = Provider::where('user_id', $id)->first();
        $WorkspaceTypes = WorkspaceType::all();
        $WorkspaceDuration = WorkspaceDuration::all();

        return view('tenant.spaces.add', compact('provider', 'WorkspaceTypes', 'WorkspaceDuration'));
    }
    public function create(Request $request)
    {
        $newWorkspace = Workspace::create([
            'title' => $request->title,
            'name' => $request->name,
            'description' => $request->description,
            'workspaceType_id' => $request->workspaceType_id,
            'maxPeople' => $request->maxPeople,
            'area' => $request->area,
            'provider_id' => $request->provider_id,


        ]);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $extension = $image->getClientOriginalExtension();
                $currentDate = Carbon::now()->format('Ymd_His');
                $newImageName = $currentDate . '_' . $image->getClientOriginalName();

                $image->storeAs('images', $newImageName, 'public');
                $file = File::create([
                    'path' => $newImageName,
                    'fileType_id' => 1,
                    'Target_id' => $newWorkspace->id,
                    'type' => 'workspace',
                ]);
            }
            // return redirect()->back()->with('success', 'تم حفظ الصور بنجاح');
        } else {
            return redirect()->back()->with('image', 'يجب رفع 4 صور على الأقل');
        }
        $durations = WorkspaceDuration::all();
        foreach ($durations as $duration) {
            if ($request->has($duration->name . '-check') && $request->input($duration->name . '-check') == 'on') {
                $priceInput = $request->input($duration->name . '-input');

                // Create a new workspace offer
                $x = WorkspaceOffer::create([
                    'workspaceDuration_id' => $duration->id,
                    'workspace_id' => $newWorkspace->id,
                    'price' => $priceInput,
                    // Add more fields as needed
                ]);
            }
        }

        return redirect()->route('workspaces')->with('success', 'تم اضافة مساحة بنجاح');
    }
}
