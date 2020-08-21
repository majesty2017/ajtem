<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index()
    {
        $reviewers = Reviewer::all();
        return view('admins.admin_pages.reviewer', compact('reviewers'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
           'email' => 'required|email|unique:reviewers|max:255',
           'password' => 'required|min:8',
           'confirmation_password' => 'same:password',
        ]);
        $reviewer = new Reviewer();
        $reviewer->name = $request->name;
        $reviewer->phone = $request->phone;
        $reviewer->email = $request->email;
        $reviewer->password = bcrypt($request->password);
        $reviewer->save();
        return redirect()->back()->with('info', 'Reviewer created successfully 🥰');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        $reviewer = Reviewer::find($request->edit_id);
        $reviewer->name = $request->name;
        $reviewer->phone = $request->phone;
        $reviewer->email = $request->email;
        $reviewer->password = bcrypt($request->password);
        $reviewer->update();
        return redirect()->back()->with('info', 'Changes saved successfully 🥰');
    }

    public function destroy(Request $request)
    {
        $reviewer = Reviewer::find($request->delete_id);
        $reviewer->delete();
        return redirect()->back()->with('info', 'Reviwer deleted successfully 🙂');
    }
}
