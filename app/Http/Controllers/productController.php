<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Mycart;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function productDetails($id)
    {
        $data = Product::find($id);
        return view('productdetail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $Mycart = new Mycart();
            $Mycart->user_id = $req->session()->get('user')['id'];
            $Mycart->product_id = $req->product_id;
            $Mycart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    function cartItem()
    {
        $userId = Session::get('user')['id'];
        // {{ dd($userId) }}
        return Mycart::where('user_id', $userId)->count();
    }

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $productlist = DB::table('Mycart')
            ->join('products', 'Mycart.product_id', '=', 'products.id')
            ->where('Mycart.user_id', $userId)
            ->select('products.*', 'Mycart.id as cart_id')
            ->get();
        return view('cartlist', ['productlist' => $productlist]);
    }
    function removeCart($id)
    {
        Mycart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $totalOrderPrice = $productlist = DB::table('Mycart')
            ->join('products', 'Mycart.product_id', '=', 'products.id')
            ->where('Mycart.user_id', $userId)
            ->select('products.*', 'Mycart.id as cart_id')
            ->sum('products.price');
        return view('ordernow', ['totalorderprice' => $totalOrderPrice]);
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Mycart::where('user_id', $userId)->get();
        foreach ($allCart as $item) {
            $MyOrder = new Order();
            $MyOrder->product_id = $item['product_id'];
            $MyOrder->user_id = $item['user_id'];
            $MyOrder->status = 'Pending';
            $MyOrder->payment_method = $req->payment_option;
            $MyOrder->payment_status = 'Pending';
            $MyOrder->address = $req->address;
            $MyOrder->save();
            Mycart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders()
    {
        $userId = Session::get('user')['id'];
        $myorders = $productlist = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['myorders' => $myorders]);
    }
}
