<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart.cart', []);
    }
}
