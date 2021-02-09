<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\order;

class ApiOrderController extends Controller
{
    public function index(OrderRequest $request)
    {
        $last_order_id = $request->get('last_order_id');
        if ($last_order_id) {
            return order::where('id', '>', $last_order_id)->get();
        }
        else {
            return order::get();
        }
    }

    public function show(order $order)
    {
        return $order;
    }
}
