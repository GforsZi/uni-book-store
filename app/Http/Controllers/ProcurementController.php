<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    function procurement()
    {
        $data = Books::with(['author', 'category'])->orderBy('stock_bk', 'asc')->get();
        return view('procurement', ["title" => "pengadaan page", "data" => $data]);
    }
}
