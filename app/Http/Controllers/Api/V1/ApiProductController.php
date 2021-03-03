<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(ProductRequest $request){
        $product = new Product();
        $product->name = $request->name;
        $product->save();
        return $product;
    }

    public function update(CategoryRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->save();
        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ['response'=>'successful'];
    }
}
