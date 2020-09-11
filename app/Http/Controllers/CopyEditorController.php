<?php

namespace App\Http\Controllers;

use App\Models\CopyEditor;
use Illuminate\Http\Request;

class CopyEditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $copyeditors = CopyEditor::all();
        return view('admins.admin_pages.copyeditor', compact('copyeditors'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string|max:255',
           'email' => 'required|unique:copy_editors|max:255',
           'password' => 'required|min:8',
           'confirmation_password' => 'same:password',
        ]);
        $copyeditor = new CopyEditor();
        $copyeditor->name = $request->name;
        $copyeditor->email = $request->email;
        $copyeditor->password = bcrypt($request->password);
        $copyeditor->save();
        return redirect()->back()->with('info', 'Copy Editor created successfully 🙂');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string|max:255',
           'email' => 'required|max:255',
        ]);
        $copyeditor = CopyEditor::find($request->edit_id);
        $copyeditor->name = $request->name;
        $copyeditor->email = $request->email;
        $copyeditor->password = bcrypt($request->password);
        $copyeditor->update();
        return redirect()->back()->with('info', 'Copy Editor created successfully 🙂');
    }

    public function destroy(Request $request)
    {
        $copyeditor = CopyEditor::find($request->delete_id);
        $copyeditor->delete();
        return redirect()->back()->with('info', 'Copy Editor deleted successfully 🙂');
    }
}
