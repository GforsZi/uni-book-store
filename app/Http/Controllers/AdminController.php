<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     function admin()
    {
        $data = Books::with(['author', 'category'])->get();
        return view('home', ["title" => "home page", "data" => $data]);
    }
}
