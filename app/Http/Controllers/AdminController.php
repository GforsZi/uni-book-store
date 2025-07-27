<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(Request $request)
    {
        $search =  $request->query();
        if (!$search || $search['type'] == 'search by') {
            $data = Author::all();
        } else {
            $data = Author::where($search['type'], 'like', '%' . $search['search'] . '%')->get();
        }

        return view('admin', ["title" => "admin page", "data" => $data, "i" => 1]);
    }
}
