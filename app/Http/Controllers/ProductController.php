<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index', ['products' => $products]);
    }
}
