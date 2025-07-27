<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    function procurement(Request $request)
    {
        $search = $request->query();
        if (!$search || $search['type'] == 'search by') {
            $data = Books::with(['author', 'category'])->orderBy('stock_bk', 'asc')->get();
        } else {
            $data = Books::with(['author', 'category'])->where($search['type'], 'like', '%' . $search['search'] . '%')->orderBy('stock_bk', 'asc')->get();
        }
        return view('procurement', ["title" => "procurement page", "data" => $data, "i" => 1]);
    }
}
