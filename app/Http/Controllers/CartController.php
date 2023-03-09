<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Cart;

use Illuminate\Http\Request;
use Auth;


class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $baskets = Cart::where('user_id', Auth::user()->id)->with('product')->get();
        // with('product') = I targeted the 'product' relationship(Eloquent), for each basket.
        return view('user.cart', compact('baskets'));
    }

    public function  store(Request $request)
    {
        $activeUser = Auth::user()->id;
        $product_id = $request->product_id;
        $quantity = 1;
        $product = Product::find($product_id)->first();


        // I WANT TO INSERT DATA INTO CART IF NOT EXISTS AND UPDATE IF EXISTS

        $checkCart = Cart::where('product_id', $product_id)->where('user_id', $activeUser)->first();

        // CHECK IF IT EXISTS IN THE DB ALREADY OR NOT

        if (!$checkCart) {

            Cart::create([
                'product_id' =>  $product_id,
                'user_id' => $activeUser,
                'quantity' => 1,
                'price' => $product->sales_price,
            ]);
        } else {
            $checkCart->quantity += 1;
            $checkCart->price += $product->sales_price;
            $checkCart->save();
        }

        // COUNT TOTAL NUMBER OF ITEMS USERS ADD TO CART
        $basket_count = Cart::where('user_id', $activeUser)->sum('quantity');

        return response()->json(['basket_count' => $basket_count], 200);
    }
}
