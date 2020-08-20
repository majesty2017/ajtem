<?php

namespace App\Http\Controllers;

use App\Models\CopyEditor;
use Illuminate\Http\Request;

class CopyEditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $copyeditors = CopyEditor::all();
        return view('admins.admin_pages.copyeditor', compact('copyeditors'));
    }
}
