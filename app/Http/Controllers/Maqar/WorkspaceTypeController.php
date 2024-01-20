<?php

namespace App\Http\Controllers\Maqar;

use App\Http\Controllers\Controller;
use App\Models\Maqar\WorkspaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkspaceTypeController extends Controller
{
    public function index()
    {
        // $types = WorkspaceType::all();
        $types = WorkspaceType::all();

        return view('platform.workspaceType.index', compact('types'));
    }
    public function view(string $name)
    {
        $type = WorkspaceType::where('name', $name)->first();
        return view('platform.workspaceType.view', compact('type'));
    }
    public function edit(string $name)
    {
        $type = WorkspaceType::where('name', $name)->first();
        return view('platform.workspaceType.edit', compact('type'));
    }
    public function update(Request $request)
    {
        $rules = [
            'label' => 'required|min:5',
            'description' => 'required|min:5|max:500',
        ];

        $messages = [
            'label.required' => 'حقل الاسم مطلوب.',
            'label.min' => 'يجب أن يكون طول الاسم على الأقل 5 أحرف.',
            'description.required' => 'حقل الوصف مطلوب.',
            'description.min' => 'يجب أن يكون طول الوصف على الأقل 5 أحرف.',
            'description.max' => 'يجب ألا يتجاوز طول الوصف 500 حرف.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Perform the update logic
        $type = WorkspaceType::find($request->id)->first();

        if (!$type) {
            return redirect()->back()->with('error', 'نوع مساحة العمل غير موجود.');
        }
        $type->update([
            // 'name' => $request->input('name'),
            'label' => $request->input('label'),
            'description' => $request->input('description')
        ]);
        // $type->label = $request->label;
        // $type->description = $request->description;
        // $type->save();

        return redirect()->route('WorkspaceType')->with('success', 'تم تحديث نوع مساحة العمل بنجاح.');
    }
    public function delete($id)
    {
        $record = WorkspaceType::findOrFail($id);
        // Delete the record
        $record->delete();
        return redirect()->back()->with('success', 'Record deleted successfully');


        // return view('delete_confirmation', ['item' => $item]);
    }
    public function add()
    {
        // Get tenant permissions only.
        return view('platform.workspaceType.add');
    }
    public function create(Request $request)
    {
        $rules = [
            'label' => 'required|min:5',
            'description' => 'required|min:5|max:500',
        ];

        $messages = [
            'label.required' => 'حقل الاسم مطلوب.',
            'label.min' => 'يجب أن يكون طول الاسم على الأقل 5 أحرف.',
            'description.required' => 'حقل الوصف مطلوب.',
            'description.min' => 'يجب أن يكون طول الوصف على الأقل 5 أحرف.',
            'description.max' => 'يجب ألا يتجاوز طول الوصف 500 حرف.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        WorkspaceType::create([
            'label' => $request->label,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
