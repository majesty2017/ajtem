<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorInChiefController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:editorinchief')->except('logout');
    }

    public function index()
    {
        return view('editorinchief.pages.index');
    }
}
