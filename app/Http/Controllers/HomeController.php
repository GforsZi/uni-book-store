<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class HomeController extends Controller
{
    function home(Request $request)
    {
        $search = $request->query();
        if (!$search || $search['type'] == 'search by') {
            $data = Books::with(['author', 'category'])->get();
        } else {
            $data = Books::with(['author', 'category'])->where($search['type'], 'like', '%' . $search['search'] . '%')->get();
        }
        return view('home', ["title" => "book page", "data" => $data]);
    }
}
