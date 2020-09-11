<?php

namespace App\Http\Controllers;

use App\Models\Manuscript;
use App\Models\Reviewer;
use App\Models\ReviewManuscript;
use Illuminate\Http\Request;

class EditorInChiefHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:editorinchief')->except('logout');
    }

    public function index()
    {
        return view('editorinchief.pages.index');
    }

    public function getReviewer()
    {
        $reviewers = Reviewer::all();
        $manuscripts = Manuscript::all()->sortByDesc('created_at');
        return view('editorinchief.pages.manuscript', compact('reviewers', 'manuscripts'));
    }

    public function sendManuscript(Request $request)
    {
        $this->validate($request, [
           'upload_file' => 'required|mimes:doc,docx,pdf'
        ]);
        $manuscript = new ReviewManuscript();
        $manuscript->reviewer_id = $request->reviewer_id;
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/manuscripts/reviewers/' . $request->reviewer_id . '/', str_replace(' ', '_', $filename));
            $manuscript->manuscript = str_replace(' ', '_', $filename);
        }
        $manuscript->save();
        return redirect()->back()->with('info', 'Manuscript sent successfully 🙂');
    }

    public function destroy(Request $request)
    {
        $manuscript = Manuscript::find($request->id);
        $manuscript->delete();
        return redirect()->back()->with('info', 'Manuscript deleted successfully 🙂');
    }








//    Download manuscript method
    public function download($filename=null)
    {
        return response()->download(public_path('uploads/manuscripts/files/' . $filename));
    }
}
