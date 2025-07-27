<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $category = Category::all();
        return view("category/view", ["title" => "category page", "category" => $category]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("category/edit", ["title" => "edit page", "data" => $category]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name_ctgy" => "required | min:3 | max:255 | string",
        ]);

        Category::create($validateData);
        return redirect("/category")->with("success", "data created");
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $validateData = $request->validate([
            "name_ctgy" => "required | min:3 | max:255 | string",
        ]);

        $category->update($validateData);
        return redirect("/category")->with("success", "data updated");
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
