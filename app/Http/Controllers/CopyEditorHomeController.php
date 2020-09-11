<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CopyEditorHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:copyeditor')->except('logout');
    }

    public function index()
    {
        return view('editorinchief.pages.index');
    }
}
