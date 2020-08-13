<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showRegisterForm() {
        return view('auth.admin-register');
    }

    public function register(Request $request) {
        // validate the form data
        $this->validate($request, [
           'name' => 'required|unique:admins|max:255:string',
            'email' => 'required|email|unique:admins|max:255:string',
           'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = new Admin();
        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->password = bcrypt($request['password']);
        $admin->save();
        return redirect()->route('admin.login')->with('info', 'you have been registered. You can now login.');
    }
}
