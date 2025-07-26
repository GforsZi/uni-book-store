<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $category = Category::all();
        return view("category/view", ["title" => "author page", "category" => $category]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name_ctgy" => "required | min:3 | max:255 | string",
        ]);

        Category::create($validateData);
        return redirect("/home")->with("success", "data created");
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/category")->with(
            "success",
            "data has been deleted"
        );
    }
}
