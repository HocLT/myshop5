<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;


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
        $cart = [];
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
        }
        return view('fe.cart', compact('cart'));
    }

    public function updateCart(Request $request) {
        $id = $request->id;
        $quantity = $request->qty;
        //dd($quantity);
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            for ($i = 0; $i < count($id); $i++) {
                $pid = $id[$i];
                $qty = $quantity[$i];
                // tìm phần tử trong cart - giỏ hàng
                foreach ($cart as $item) {
                    if ($item->product->id == $pid) {
                        $item->quantity = $qty;
                        break;
                    }
                }
            }
            $request->session()->put('cart', $cart);
        }
        return view('fe.cart', compact('cart'));
    }

    public function checkout(Request $request) {
        return view('fe.checkout');
    }

    public function saveCart(Request $request) {
        $user = Auth::user();
        $shipping = $request->shipping;
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
           
            $ord = new Order();
            $ord->user_id = $user->id;
            $ord->order_date = date('Y-m-d', time());
            $ord->shipping_address = $shipping;
            $ord->save();   // lưu giỏ hàng

            // lưu order detail
            foreach ($cart as $item) {
                $od = new OrderDetail();
                $od->order_id = $ord->id; 
                $od->product_id = $item->product->id;
                $od->price = $item->product->price;
                $od->quantity = $item->quantity;
                $od->save();
            }

            // xóa session
            $request->session()->forget('cart');
        }

        return redirect('/');

    }
}
