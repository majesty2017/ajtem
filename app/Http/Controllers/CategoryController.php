<?php


namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getCategories() {
        $categories = Category::all();
        return view('admins.admin_pages.categories', compact('categories'));
    }

    public function postCategories(Request $request) {
        $this->validate($request, [
           'name' => 'required|string|max:255|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request['name'];
        $category->save();
        return redirect()->back()->with('info', 'New category add successfully.');
    }

    public function updateCategory(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories',
        ]);

        $updateCat = Category::find($request['category_id']);
        $updateCat->name = $request['name'];
        $updateCat->update();
        return redirect()->back()->with('info', 'Category saved successfully.');
    }

    public function deleteCategory(Request $request) {
        $deleteCat = Category::find($request['categoryId']);
        $deleteCat->delete();
        return redirect()->back()->with('info', 'Category deleted successfully.');
    }
}
