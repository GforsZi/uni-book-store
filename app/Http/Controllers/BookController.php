<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function home()
    {
        $data = Books::with(['author', 'category'])->get();
        return view('home', ["title" => "home page", "data" => $data]);
    }
    function show($id)
    {
        $data = Books::where('id', $id)->get();
        return view('book/show', ["title" => "show page", "data" => $data]);
    }
    function edit($id)
    {
        $data = Books::where('id', $id)->get();
        return view('book/edit', ["title" => "edit page", "data" => $data]);
    }

    function storeData(Request $request)
    {
        $validateData = $request->validate([
            "category_bk" => "required |",
            "title_bk" => "required | min:3 | max:255 | string",
            "price_bk" => "required | max:255 | string",
            "stock_bk" => "required | integer",
            "author_bk" => "required |",
        ]);

        Books::create($validateData);
        return redirect("/home")->with("success", "data created");
    }

    function updateData(Request $request, Books $book)
    {

        $validatedData = $request->validate([
            "category_bk" => "required |",
            "title_bk" => "required | min:3 | max:255 | string",
            "price_bk" => "required | max:255 | string",
            "stock_bk" => "required | integer",
            "author_bk" => "required |",
        ]);

        $book->update($validatedData);

        return redirect("/home")->with(
            "success",
            "data has been updated"
        );
    }

    function deleteData(Request $request, Books $book)
    {
        $book->delete();
        return redirect("/home")->with(
            "success",
            "data has been deleted"
        );
    }
}
