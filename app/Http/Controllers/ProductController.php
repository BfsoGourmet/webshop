<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index',['products'=>$products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->uid = $request->uid;
        $product->product = $request->product;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->vegan = $request->vegan;
        $product->vegetarian = $request->vegetarian;
        $product->article_number = $request->article_number;
        $product->picture = $request->picture;
        $product->slug = $request->slug;
        $product->declaration = $request->declaration;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->save();

        return redirect(view('products.index'))->withSuccess(__('form.successfully-stored'));;
    }


    public function show(Product $product)
    {
        return view('products.show',['product'=>$product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit',['product'=>$product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->uid = $request->uid;
        $product->product = $request->product;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->vegan = $request->vegan;
        $product->vegetarian = $request->vegetarian;
        $product->article_number = $request->article_number;
        $product->picture = $request->picture;
        $product->slug = $request->slug;
        $product->declaration = $request->declaration;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->save();

        return redirect(route('products.index'))->withSuccess(__('form.successfully-updated'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->withSuccess(__('form.successfully-deleted'));

    }
}
