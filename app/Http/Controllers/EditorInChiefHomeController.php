<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Manuscript;
use App\Models\Reviewer;
use App\Models\ReviewManuscript;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorInChiefHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:editorinchief')->except('logout');
    }

    public function index()
    {
        $manuscriptCount = Manuscript::all()->count();

        $manuscriptUnderReviewCount = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 0)
            ->count();

        $manuscriptReviewedCount = ReviewManuscript::all()
            ->where('status', 1)
            ->where('is_viewed', 1)
            ->count();

        $publishedArticle = Articles::all()
            ->where('is_published', 1)
            ->count();

        $manuscriptReceivedCount = ReviewManuscript::all()
            ->where('status', 1)
            ->where('is_viewed', 1)
            ->count();

        $manuscriptReceivedFromReviewer = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1);

        $manuscriptReceivedFromAuthor = Manuscript::all()
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->sortByDesc('created_at');

        return view('editorinchief.pages.index', compact(
        'manuscriptCount',
            'manuscriptUnderReviewCount',
                'manuscriptReviewedCount',
                'publishedArticle',
                'manuscriptReceivedCount',
                'manuscriptReceivedFromAuthor',
                'manuscriptReceivedFromReviewer'
        ));
    }

    public function getReviewer()
    {
        $reviewers = Reviewer::all();

        $manuscripts = Manuscript::all()->sortByDesc('created_at');

        $manuscriptReceivedCount = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->count();

        $manuscriptReceivedFromAuthor = Manuscript::all()
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->sortByDesc('created_at');

        $manuscriptReceivedFromReviewer = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1);

        return view('editorinchief.pages.manuscript', compact(
            'reviewers',
            'manuscripts',
            'manuscriptReceivedCount',
            'manuscriptReceivedFromAuthor',
            'manuscriptReceivedFromReviewer'
        ));
    }

    public function sendManuscript(Request $request)
    {
        $this->validate($request, [
           'upload_file' => 'required|mimes:doc,docx,pdf'
        ]);
        $manuscript = new ReviewManuscript();
        $manuscript->reviewer_id = $request->reviewer_id;
        $manuscript->note = $request->note;
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
        $manuscripts = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 0)
            ->sortByDesc('created_at');

        $manuscriptReceivedCount = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->count();

        $manuscriptReceivedFromAuthor = Manuscript::all()
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->sortByDesc('created_at');

        $manuscriptReceivedFromAuthorCount = Manuscript::all()
            ->where('is_viewed', 0)->count();

        $manuscriptReceivedFromReviewer = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1);

        return view('editorinchief.pages.manuscriptunderreview', compact(
            'manuscripts',
            'manuscriptReceivedCount',
            'manuscriptReceivedFromAuthor',
            'manuscriptReceivedFromAuthorCount',
            'manuscriptReceivedFromReviewer'
        ));
    }

    public function reviewedManuscript()
    {
        $manuscripts = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->sortByDesc('created_at');

        $manuscriptReceivedFromAuthor = Manuscript::all()
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->sortByDesc('created_at');

        $manuscriptReceivedCount = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->count();

        $manuscriptReceivedFromReviewer = ReviewManuscript::all()
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->sortByDesc('created_at');

        $manuscriptReceivedFromAuthorCount = Manuscript::all()
        ->where('is_viewed', 0)->count();

        return view('editorinchief.pages.reviewedmanuscript', compact(
            'manuscripts',
            'manuscriptReceivedCount',
            'manuscriptReceivedFromAuthorCount',
            'manuscriptReceivedFromAuthor',
            'manuscriptReceivedFromReviewer'
        ));
    }

    public function notifications($id = null)
    {
        if ($id) {
        ReviewManuscript::where('id', $id)
            ->update([
                'status' => 2
            ]);
        }
        return redirect()->route('editorinchief.manuscript');
    }















//    Download manuscript method
    public function download($filename = null, $id = null)
    {
        Manuscript::where('id', $id)->update([
           'is_viewed' => 1
        ]);
//        if ($id) {
//            ReviewManuscript::where('id', $id)->update([
//                'status' => 1
//            ]);
//        }
        return response()->download('uploads/manuscripts/reviewed_manuscripts/' . $filename);
    }
}
