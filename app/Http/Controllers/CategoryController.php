<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $category = Category::all();
        return view("author/view", ["title" => "author page", "author" => $category]);
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/home")->with(
            "success",
            "data has been deleted"
        );
    }
}
