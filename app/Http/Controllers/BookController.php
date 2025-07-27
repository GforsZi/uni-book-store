<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    function view()
    {
        $data = Books::with(['author', 'category'])->get();
        $author = Author::all();
        $category = Category::all();
        return view('book/view', ["title" => "book page", "data" => $data, "categories" => $category, "authors" => $author]);
    }

    function edit($id)
    {
        $data = Books::with(['author', 'category'])->find($id);
        $author = Author::all();
        $category = Category::all();
        return view('book/edit', ["title" => "edit page", "data" => $data, "categories" => $category, "authors" => $author]);
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            "category_id" => ["required", "exists:categories,id", Rule::notIn(['Kategori Buku'])],
            "title_bk" => "required | min:3 | max:255 | string",
            "price_bk" => "required | max:255 | string",
            "stock_bk" => "required | integer",
            "author_id" => ["required", "exists:authors,id", Rule::notIn(['Penerbit Buku'])],
        ]);

        Books::create($validatedData);
        return redirect("/book")->with("success", "data created");
    }

    public function update(Request $request, $id)
    {
        $book = Books::find($id);
        $validatedData = $request->validate([
            "category_id" => "required | exists:categories,id",
            "title_bk" => "required | min:3 | max:255 | string",
            "price_bk" => "required | max:255 | string",
            "stock_bk" => "required | integer",
            "author_id" => "required | exists:authors,id",
        ]);
        $book->update($validatedData);

        return redirect("/book")->with(
            "success",
            "data has been updated"
        );
    }

    function delete(Request $request, $id)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect("/book")->with(
            "success",
            "data has been deleted"
        );
    }
}
