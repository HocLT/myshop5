<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $prods = Product::all();
        return view('fe.home', compact('prods'));
    }

    public function productDetails($slug) {
        $prod = Product::where('slug', $slug)->first();
        return view('fe.product_details', compact('prod'));
    }
}
