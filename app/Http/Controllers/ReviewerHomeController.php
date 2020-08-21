<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewerHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reviewer')->except('logout');
    }

    public function index()
    {
        return view('reviewer.pages.index');
    }
}
