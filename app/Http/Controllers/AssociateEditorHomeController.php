<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociateEditorHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:associateeditor')->except('logout');
    }

    public function index()
    {
        return view('associateeditor.pages.index');
    }
}
