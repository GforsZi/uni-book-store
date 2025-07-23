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

    public function delete(Request $request, $id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect("/home")->with(
            "success",
            "data has been deleted"
        );
    }
}
