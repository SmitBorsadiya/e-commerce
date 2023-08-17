<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data = Product::
        where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id']; 
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userID = session::get('user')['id'];
        return Cart::where('user_id', $userID)->count();
    }
    function cartList(Request $req)
    {
        if ($req->session()->has('user')) {
            $userID = session::get('user')['id'];
            $total = $products = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userID)
            ->select('products.*','cart.id as cart_id')
            ->get();
            
            return view('cart',['products'=>$products]);
        }else {
            return redirect('failure');
        }
    }
    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }
    function orderNow()
    {
        $userID = session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)
        ->sum('products.price');
        if ($total == 0) {
            return redirect('failure');
        }else {
            return view('OrderNow',['total'=>$total]);
        }

    }
    function orderPlace(Request $req)
    {
        $userID = session::get('user')['id'];
        $allCart = Cart::where('user_id',$userID)->get();
        foreach ($allCart as $cart) {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userID)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders(Request $req)
    {
        if ($req->session()->has('user')) {
            $userID = session::get('user')['id'];
            $orders = $products = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userID)
            ->get();
            return view('myorders',['orders'=>$orders]);
        }else {
            return redirect('failure');
        }
    }
}