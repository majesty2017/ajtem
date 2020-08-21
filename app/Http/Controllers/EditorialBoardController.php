<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index()
    {
        $editorialboards = Editorial::all();
        return view('admins.admin_pages.editorialboard', compact('editorialboards'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string|max:255',
           'email' => 'required|unique:editorials|max:255',
           'password' => 'required|min:8',
           'confirmation_password' => 'same:password',
        ]);
        $editorialboard = new Editorial();
        $editorialboard->name = $request->name;
        $editorialboard->email = $request->email;
        $editorialboard->password = $request->password;
        $editorialboard->save();
        return redirect()->back()->with('info', 'Editorial Board created successfully 🙂');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|max:255',
            'password' => '',
            'confirmation_password' => 'same:password',
        ]);
        $editorialboard = Editorial::find($request->edit_id);
        $editorialboard->name = $request->name;
        $editorialboard->email = $request->email;
        $editorialboard->password = bcrypt($request->password) ?? '';
        $editorialboard->update();
        return redirect()->back()->with('info', 'Changes saved successfully 🙂');
    }

    public function destroy(Request $request)
    {
        $editorialboard = Editorial::find($request->delete_id);
        $editorialboard->delete();
        return redirect()->back()->with('info', 'Editorial deleted successfully 🙂');
    }
}
