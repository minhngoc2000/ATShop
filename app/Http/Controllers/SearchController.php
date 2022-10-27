<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('Page.search');
    }

    public function find(Request $request)
    {
        header('Content-type: application/json; charset=utf-8');

        $product = Products::where('Name', 'like', '%' . $request->get('q') . '%')->get();

        return response()->json($product, 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function search(Request $rq)
    {
        $key = $rq->keyword;
        $product = Products::where('Name', 'like', '%' . $key . '%')->orwhere('Code', 'like', '%' . $key . '%')->get();
        $num = count($product);

        return view('Page.search', ['pro' => $product, 'num' => $num, 'key' => $key]);
    }
}
