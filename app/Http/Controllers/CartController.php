<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $cart= (new SessionController)->getCart($request);
        dd($cart);

        return view('cart.cart', []);
    }
}
