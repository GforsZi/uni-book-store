<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function home()
    {
        $data = Books::all();
        return view('home', ["title" => "home page", "data" => $data]);
    }
}
