<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $sliders = Slider::all();
        $author = User::all()->count();
        $articles = Articles::all()->count();
        $article = Articles::all();
        $category = Category::all()->count();
        $admin = Admin::all()->count();
        return view('admins.admin_pages.slider', compact(
            'sliders',
            'article',
            'author',
            'category',
            'admin',
            'articles'
        ));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
           'image' => 'required|image|mimes:jpg,jpeg,png,svg'
        ]);
        $slider = new Slider();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/articles/sliders/', $filename);
            $slider->image = $filename;
        }
        $slider->save();
        return redirect()->back()->with('info', 'Slider image created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,jpeg,png,svg'
        ]);
        $slider = Slider::find($request->slider_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/articles/sliders/', $filename);
            $slider->image = $filename;
        }
        $slider->update();
        return redirect()->back()->with('info', 'Changes saved successfully.');
    }

    public function destroy(Request $request)
    {
        $slider = Slider::find($request->slider_delete_id);
        $slider->delete();
        return redirect()->back()->with('info', 'Slider image deleted successfully.');
    }


}
