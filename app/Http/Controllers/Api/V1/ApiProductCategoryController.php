<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ApiProductCategoryController extends Controller
{
    public function index()
    {
        return ProductCategory::get();
    }

    public function show(int $uid)
    {
        return ProductCategory::where('uid',$uid)->first();
    }

    public function store(ProductCategoryRequest $request){
        $tmpArray = array();
        foreach($request->productCategories as $entry){
            $productCat = ProductCategory::firstOrNew(['uid' => $entry['uid']]);
            $productCat->uid = $entry['uid'];
            $productCat->product_id = $entry['product_id'];
            $productCat->category_id = $entry['category_id'];
            $productCat->save();
            array_push($tmpArray,ProductCategory::where('uid',$entry['uid'])->first());
        }
        return $tmpArray;
    }

    public function update(ProductCategory $request, int $uid)
    {
        $productCat = ProductCategory::where('uid',$uid)->first();
        $productCat->product_id = $request->product_id;
        $productCat->category_id = $request->category_id;
        $productCat->save();
        return $productCat;
    }

    public function destroy(int $uid)
    {
        $productCat = ProductCategory::where('uid',$uid)->first();
        $productCat->delete();
        return ['response'=>'successful'];
    }
}
