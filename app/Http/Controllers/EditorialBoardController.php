<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index()
    {
        $editorialboards = Editorial::all();
        return view('admins.admin_pages.editorialboard', compact('editorialboards'));
    }
}
