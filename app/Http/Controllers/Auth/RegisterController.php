<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|same:password_confirmation',
            'address' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'interest' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|numeric|max:255',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->institution = $request->institution;
        $user->address = $request->address;
        $user->area_of_interest = $request->interest;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->prefix = $request->prefix;
        $user->department = $request->department;
        $user->country = $request->country;
        $user->postal_code = $request->postal_code;
        $user->save();
//        Mail::to($request->email)->send(new WelcomeMail());
        return redirect()->route('next')->with('info', 'Almost done here 🙂');
    }

    public function nextRegister()
    {
        return view('auth.register2');
    }

    public function submitNext(Request $request)
    {

    }
}
