<?php

namespace App\Http\Controllers;

use App\Mail\SuccessMail;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('aboutUs', 'contactUs', 'viewArticle', 'logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $author_id = \Auth::id();
        $articles = Articles::where('id', $author_id);

        $published_articles = Articles::all()->where('is_published', 1)->take(4);

        $specials = Articles::all()->where('is_published', 1)->take(1)->sortByDesc('created_at');

        $categories = Category::all();

        $sliders = Slider::all()->take(4);
        return view('pages.home', compact(
            'articles',
            'categories',
            'published_articles',
            'specials',
            'sliders'
        ));
    }

    public function checkout() {
        $articles = Articles::all();
        $categories = Category::all();
        return view('pages.checkout', compact('articles', 'categories'));
    }

    public function aboutUs() {
        $articles = Articles::all();
        $categories = Category::all();
        return view('pages.aboutus', compact('articles', 'categories'));
    }

    public function contactUs() {
        $articles = Articles::all();
        $categories = Category::all();
        return view('pages.contact', compact('articles', 'categories'));
    }

    public function submitArticle() {
        $articles = Articles::all();
        $categories = Category::all();
        return view('pages.submitarticle', compact('articles', 'categories'));
    }

    public function authorGuideline() {
        $articles = Articles::all();
        $categories = Category::all();
        return view('pages.authorguideline', compact('articles', 'categories'));
    }

    public function viewArticle($id) {
        $articles = Articles::all();
        $article = Articles::find($id);
        $categories = Category::all();
        if (!$article || $article == null) {
            return redirect()->back();
        }
        return view('pages.single_article', compact('articles', 'categories', 'article'));
    }

    public function postArticle(Request $request) {
        $this->validate($request, [
            'title' => 'required|string',
            'author' => 'required|string|max:255',
            'year' => 'required|numeric',
            'pages' => 'required|string',
            'abstract' => 'required|string',
            'email' => 'required|string|email|unique:articles',
            'volume' => 'numeric',
            'uploadImage' => 'required|mimes:jpg,jpeg,svg,png',
            'uploadFile' => 'required|mimes:docx,doc,pdf',
        ]);

        $author = \Auth::id();

        $article = new Articles();
        $article->author_id = $author;
        $article->category_id = $request->input('category_name');
        $article->title = $request['title'];
        $article->email = $request['email'];
        $article->year = $request['year'];
        $article->pages = $request['pages'];
        $article->tags = $request['tags'];
        $article->author = $request['author'];
        $article->abstract = $request['abstract'];

        if ($request->file('uploadFile')) {
            $file = $request->file('uploadFile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/files', $filename);
            $article->upload_files = $filename;
        }
        else {
            return redirect()->back()->with('info', 'No upload file selected. Please choose a file.');
        }

        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/articles/covers/', $filename);
            $article->upload_image = $filename;
        } else {
            return redirect()->back()->with('info', 'No upload cover image selected. Please choose aa image.');
        }

        User::where('id', Auth::user()->id)->update(['role' => 1]);

        $article->save();

//        Mail::to($request->email)->send(new SuccessMail());

        return redirect()->back()->with('info', 'Article posted successfully 🙂');
    }
}