<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        $data = Author::all();
        return view('admin', ["title" => "home page", "data" => $data]);
    }
}
