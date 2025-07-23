<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function view()
    {
        $author = Author::all();
        return view("author/view", ["title" => "author page", "author" => $author]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name_ath" => "required | min:3 | max:255 | string",
            "address_ath" => "required | max:255 | string",
            "city_ath" => "required | max:255 | string",
            "phone_number_ath" => "required",
        ]);

        Author::create($validateData);
        return redirect("/author")->with("success", "data created");
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $validateData = $request->validate([
            "name_ath" => "required | min:3 | max:255 | string",
            "address_ath" => "required | max:255 | string",
            "city_ath" => "required | max:255 | string",
            "phone_number_ath" => "required",
        ]);
    }

    public function delete(Request $request, $id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect("/author")->with(
            "success",
            "data has been deleted"
        );
    }
}
