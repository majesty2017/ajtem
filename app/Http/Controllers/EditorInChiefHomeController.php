<?php

namespace App\Http\Controllers;

use App\Models\Articles;
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
        $manuscriptCount = Manuscript::all()->count();
        $manuscriptUnderReviewCount = ReviewManuscript::all()->where('status', 0)->count();
        $manuscriptReviewedCount = ReviewManuscript::all()->where('status', 1)->count();
        $publishedArticle = Articles::all()->where('is_published', 1)->count();
        return view('editorinchief.pages.index', compact(
        'manuscriptCount',
            'manuscriptUnderReviewCount',
                'manuscriptReviewedCount',
                'publishedArticle'
        ));
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

    public function getManuscriptUnderReview()
    {
        $manuscripts = Manuscript::all()->where('status', 0);
        return view('editorinchief.pages.manuscriptunderreview', compact('manuscripts'));
    }







//    Download manuscript method
    public function download($filename = null, $id = null)
    {
        Manuscript::where('id', $id)->update([
           'is_viewed' => 1
        ]);
        return response()->download(public_path('uploads/manuscripts/files/' . $filename));
    }
}
