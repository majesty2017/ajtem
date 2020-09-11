<?php

namespace App\Http\Controllers;

use App\Models\AssociateEditor;
use Illuminate\Http\Request;

class AssociateEditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $associateeditors = AssociateEditor::all();
        return view('admins.admin_pages.associateeditor', compact('associateeditors'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:associate_editors|max:255',
            'password' => 'required|min:8',
            'confirmation_password' => 'same:password',
        ]);
        $associateeditor = new AssociateEditor();
        $associateeditor->name = $request->name;
        $associateeditor->email = $request->email;
        $associateeditor->password = bcrypt($request->password);
        $associateeditor->save();
        return redirect()->back()->with('info', 'Associate Editor created successfully 🙂');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|max:255',
        ]);
        $associateeditor = AssociateEditor::find($request->edit_id);
        $associateeditor->name = $request->name;
        $associateeditor->email = $request->email;
        $associateeditor->password = bcrypt($request->password);
        $associateeditor->update();
        return redirect()->back()->with('info', 'Associate Editor created successfully 🙂');
    }

    public function destroy(Request $request)
    {
        $associateeditor = AssociateEditor::find($request->delete_id);
        $associateeditor->delete();
        return redirect()->back()->with('info', 'Associate Editor deleted successfully 🙂');
    }
}
