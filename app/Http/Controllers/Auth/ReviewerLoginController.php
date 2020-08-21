<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:reviewer')->except('logout');
    }

    public function showLoginForm() {
        return view('reviewer.auth.login');
    }

    public function login(Request $request) {
        // validate the form data
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:8',
        ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        // attempt to log the user in
        if (Auth::guard('reviewer')->attempt($credentials, $request->remember)) {
            // if successful, then redirect to their intended locations
            return redirect()->intended(route('reviewer.dashboard'));
        }

        // if unsuccessful, then redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('reviewer')->logout();

        return redirect()->route('reviewer.login')->with('info', 'You are logged out.');
    }
}
