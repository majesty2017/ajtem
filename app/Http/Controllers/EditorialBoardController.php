<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:editorial');
    }

    public function index()
    {
        return view('editorialboard.pages.index');
    }
}
