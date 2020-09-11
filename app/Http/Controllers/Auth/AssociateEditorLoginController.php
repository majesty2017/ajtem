<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssociateEditorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:associateeditor')->except('logout');
    }

    public function showLoginForm() {
        return view('associateeditor.auth.login');
    }

    public function login(Request $request) {
        // validate the form data
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required',
        ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        // attempt to log the user in
        if (Auth::guard('associateeditor')->attempt($credentials, $request->remember)) {
            // if successful, then redirect to their intended locations
            return redirect()->intended(route('associateeditor.dashboard'));
        }

        // if unsuccessful, then redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('associateeditor')->logout();

        return redirect()->route('associateeditor.login')->with('info', 'You are logged out.');
    }
}
