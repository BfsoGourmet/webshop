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
            $orders =  Order::where('id', '>', $last_order_id)->with('productOrders', 'customer', 'status', 'shippingAddress', 'billingAddress')->get();
        }
        else {
            $orders = Order::with('productOrders', 'customer', 'status', 'shippingAddress', 'billingAddress')->get();
        }
        return $this->jsonResponse(['orders' => $orders]);
    }

    public function show(int $order_id)
    {
        $order = Order::where('id', '=', $order_id)->with('productOrders', 'customer', 'status', 'shippingAddress', 'billingAddress')->first();
        return $this->jsonResponse($order);
    }
}
