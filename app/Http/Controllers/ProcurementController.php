<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    function procurement()
    {
        $data = Books::with(['author', 'category'])->get();
        return view('procurement', ["title" => "pengadaan page", "data" => $data]);
    }
}
