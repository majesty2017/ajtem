<?php

namespace App\Http\Controllers;

use App\Models\EditorInChief;
use Illuminate\Http\Request;

class EditorInChiefController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $editorinchiefs = EditorInChief::all();
        return view('admins.admin_pages.editorinchief', compact('editorinchiefs'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:editor_in_chiefs|max:255',
            'password' => 'required|min:8',
            'confirmation_password' => 'same:password',
        ]);
        $editorinchief = new EditorInChief();
        $editorinchief->name = $request->name;
        $editorinchief->email = $request->email;
        $editorinchief->password = bcrypt($request->password);
        $editorinchief->save();
        return redirect()->back()->with('info', 'Editor in chief created successfully 🙂');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|max:255' ?? '',
            'password' => 'min:8' ?? '',
            'confirmation_password' => 'same:password',
        ]);
        $editorinchief = EditorInChief::find($request->edit_id);
        $editorinchief->name = $request->name;
        $editorinchief->email = $request->email;
        $editorinchief->password = bcrypt($request->password);
        $editorinchief->update();
        return redirect()->back()->with('info', 'Changes saved successfully 🙂');
    }

    public function destroy(Request $request)
    {
        $editorinchief = EditorInChief::find($request->delete_id);
        $editorinchief->delete();
        return redirect()->back()->with('info', 'Editor In Chief deleted successfully 🙂');
    }
}
