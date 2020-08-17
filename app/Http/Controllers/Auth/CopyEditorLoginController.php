<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyEditorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:copyeditor')->except('logout');
    }

    public function showLoginForm() {
        return view('copyeditor.auth.login');
    }

    public function login(Request $request) {
        // validate the form data
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required',
        ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        // attempt to log the user in
        if (Auth::guard('copyeditor')->attempt($credentials, $request->remember)) {
            // if successful, then redirect to their intended locations
            return redirect()->intended(route('copyeditor.dashboard'));
        }

        // if unsuccessful, then redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('copyeditor')->logout();

        return redirect()->route('copyeditor.login')->with('info', 'You are logged out.');
    }
}
