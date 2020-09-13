<?php

namespace App\Http\Controllers;

use App\Models\ReviewManuscript;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewerHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reviewer')->except('logout');
    }

    public function index()
    {
        $is_not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->count();

        $not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0);

        $manuscriptToReviewCount = ReviewManuscript::all()
            ->where('reviewer_id', Auth::id())
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->count();

        $manuscriptCompletedReviewedCount = ReviewManuscript::all()
            ->where('reviewer_id', Auth::id())
            ->where('is_viewed', 1)
            ->where('status', 1)
            ->count();

        return view('reviewer.pages.index', compact(
            'is_not_viewed',
            'not_viewed',
            'manuscriptToReviewCount',
            'manuscriptCompletedReviewedCount'
        ));
    }

    public function manuscript()
    {
        $manuscripts = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('status', 0)
            ->sortByDesc('created_at');

        $is_not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->count();

        $not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0);
        return view('reviewer.pages.manuscript', compact(
            'manuscripts',
            'is_not_viewed',
            'not_viewed'
        ));
    }

    public function resendManuscript(Request $request)
    {
        $this->validate($request, [
           'upload_file' => 'required|mimes:doc,docx,pdf',
        ]);

        $manuscript = new ReviewManuscript();
        $manuscript->status = 1;
        $manuscript->note = $request->note;
        $manuscript->reviewer_id = Auth::user()->id;
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $filename = str_replace(' ', '_', $file->getClientOriginalName());
            $file->move('uploads/manuscripts/reviewed_manuscripts/', $filename);
            $manuscript->manuscript = $filename;
        }
        $manuscript->save();
        ReviewManuscript::where('id', $manuscript->id)
            ->where('reviewer_id', Auth::id())
            ->update([
                'is_viewed' => 1
            ]);
        return redirect()->back()->with('info', 'Manuscript send successfully 🙂');
    }

    public function reviewedManuscript()
    {
        $manuscripts = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('status', 1)
            ->sortByDesc('created_at');

        $is_not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0)
            ->count();

        $not_viewed = ReviewManuscript::all()
            ->where('reviewer_id', Auth::user()->id)
            ->where('is_viewed', 0)
            ->where('status', 0);

        return view('reviewer.pages.reviewedmanuscript', compact(
            'manuscripts',
            'is_not_viewed',
            'not_viewed'
        ));
    }


















    public function notications($id = null)
    {
        if ($id) {
            ReviewManuscript::where('id', $id)
                ->where('reviewer_id', Auth::id())
                ->where('is_viewed', 0)
                ->update([
                'is_viewed' => 1
            ]);

        }
        return redirect()->route('reviewer.manuscript');
    }



    public function download( $id = null, $filename = null)
    {
        ReviewManuscript::where('id', $id)->where('is_viewed', 0)->update([
            'is_viewed' => 1
        ]);
        return response()->download('uploads/manuscripts/reviewers/' . Auth::user()->id . '/' . $filename);
    }

    public function downloadReviewedManuscript($filename = null)
    {
        return response()->download('uploads/manuscripts/reviewed_manuscripts/' . $filename);
    }
}
