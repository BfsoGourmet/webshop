<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function show(int $article_number)
    {
        return Product::where('article_number',$article_number)->first();
    }

    public function store(ProductRequest $request){
        $tmpArray = array();
        foreach($request->products as $entry)
        {
            $product = Product::firstOrNew(['article_number' => $entry['article_number']]);
            $product->uid = $entry['uid'];
            $product->product = $entry['product'];
            $product->description = $entry['description'];
            $product->price = $entry['price'];
            $product->vegan = $entry['vegan'];
            $product->vegetarian = $entry['vegetarian'];
            $product->picture = $entry['picture'];
            $product->slug = $entry['slug'];
            $product->declaration = $entry['declaration'];
            $product->manufacturer_id = $entry['manufacturer_id'];
            $product->save();
            array_push($tmpArray,Product::where('article_number',$entry['article_number'])->first());
        }
        return $tmpArray;
    }

    public function update(ProductRequest $request, int $article_number)
    {
        $product = Product::where('article_number',$article_number)->first();
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
        return $product;
    }

    public function destroy(int $article_number)
    {
        $product = Product::where('article_number',$article_number)->first();
        $product->delete();
        return ['response'=>'successful'];
    }
}
