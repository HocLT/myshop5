<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;

class HomeController extends Controller
{
    public function index() 
    {
        $prods = Product::all();
        return view('fe.home', compact('prods'));
    }

    public function productDetails($slug) 
    {
        $prod = Product::where('slug', $slug)->first();
        return view('fe.product_details', compact('prod'));
    }

    public function addCart(Request $request) 
    {
        $id = $request->pid;
        $quantity = $request->quantity;
        $prod = Product::find($id);
        // tạo đối tượng CartItem
        $cartItem = new CartItem($prod, $quantity);

        $cart = [];
        // kiểm tra xem đã có session lưu cart - giỏ hàng hay chưa?
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
        }
        $cart[] = $cartItem;    // thêm sản phẩm vào giỏ hàng
        // lưu lại vào biến session
        $request->session()->put('cart', $cart);
    }

    public function viewCart(Request $request) 
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            dd($cart);  
        }
    }
}
