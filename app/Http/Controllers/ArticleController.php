<?php


namespace App\Http\Controllers;


use App\Mail\SuccessMail;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function getArticle() {
//        $author = \Auth::id();
        $articles = Articles::all();
        $categories = Category::all();
        $greeting = $this->greet();
        return view('admins.admin_pages.articles', compact('articles', 'categories', 'greeting'));
    }



    public function greet()
    {
        $hour = $this->format('H');
        if ($hour < 12) {
            return 'Good morning';
        }
        if ($hour < 17) {
            return 'Good afternoon';
        }
        return 'Good evening';
    }

    public function postArticle(Request $request) {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'email' => 'required|email|unique:articles|max:255',
            'year' => 'required|numeric',
            'pages' => 'required|numeric|max:255',
            'abstract' => 'required|string',
            'tags' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'uploadImage' => 'required|mimes:jpg,jpeg,png,svg',
            'uploadFile' => 'required|mimes:docx,pdf,doc',
        ]);

        $article = new Articles();
        $article->admin_id = Auth::user()->id;
        $article->category_id = $request->category_name;
        $article->title = $request->title;
        $article->email = $request->email;
        $article->year = $request->year;
        $article->author = $request->author;
        $article->volume = $request->volume;
        $article->pages = $request->pages;
        $article->abstract = $request->abstract;
        $article->tags = $request->tags;

        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/articles/covers/', $filename);
            $article->upload_image = $filename;
        } else {
            return redirect()->back()->with('info', 'No upload cover image selected. Please choose an image.');
        }

        if ($request->file('uploadFile')) {
            $file = $request->file('uploadFile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/files/', $filename);
            $article->upload_files = $filename;
        }
        else {
            return redirect()->back()->with('info', 'No upload file selected. Please choose a file.');
        }

        $article->save();

        return redirect()->back()->with('info', 'Article submitted successfully.');
    }

//    Download article / journal method
    public function download($filename=null)
    {
        return response()->download(public_path('uploads/articles/files/' . $filename));
    }

//    Update article method
    public function updateArticle(Request $request) {
        $this->validate($request, [
            'title' => 'string|max:255',
            'year' => 'numeric',
            'pages' => 'max:255',
            'author' => 'string|max:255',
            'uploadImage' => 'mimes:jpg,jpeg,png,svg',
            'uploadFile' => 'mimes:docx,pdf,doc',
        ]);

        $article = Articles::find($request->article_id);
        $article->admin_id = Auth::user()->id;
        $article->category_id = $request->category_name;
        $article->title = $request->title;
        $article->year = $request->year;
        $article->volume = $request->volume;
        $article->author = $request->author;
        $article->pages = $request->pages;

        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/articles/covers/', $filename);
            $article->upload_image = $filename;
        }

        if ($request->file('uploadFile')) {
            $file = $request->file('uploadFile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/files/', $filename);
            $article->upload_files = $filename;
        }

        $article->update();

        return redirect()->back()->with('info', 'Changes saved successfully 🙂');
    }

//    Delete article / journal method
    public function deleteArticle(Request $request) {
        $article = Articles::find($request['articleId']);

        $article->delete();

        return redirect()->back()->with('info', 'Article deleted successfully 🙂');
    }

//    Publish article / journal method
    public function publishArticle(Request $request)
    {
        Articles::where('id', $request->article_id)->update(['is_published' => 1]);

//        $email = Articles::where('id', $request->article_id)->pluck('email');
//        Mail::to($email)->send(new SuccessMail());
        return redirect()->back()->with('info', 'Article published successfully 🙂');
    }

    private function format(string $string)
    {
    }
}
