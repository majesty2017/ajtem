<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Articles;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $author = User::all()->count();
        $article = Articles::all()->count();
        $category = Category::all()->count();
        $admin = Admin::all()->count();
//       $greeting = $this->greet();

        return view('admins.dashboard', compact('author', 'article', 'category', 'admin'));
    }

    public function greet()
    {
        $hour = date('h');
        if ($hour < 12) {
            return 'Good morning';
        }
        if ($hour < 17) {
            return 'Good afternoon';
        }
        return 'Good evening';
    }

    public function lockScreen(Request $request) {
        $this->validate($request, [
           'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['password' => $request->password])) {
            // if successful, then redirect to their intended locations
            return redirect('admin/dashboard');
        }
        return redirect()->back();
    }

    public function getAuthors() {
        $authors = User::all();
        $greeting = $this->greet();
        return view('admins.admin_pages.authors', compact('authors', 'greeting'));
    }
}
