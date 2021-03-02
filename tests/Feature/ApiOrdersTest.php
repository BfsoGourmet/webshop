<?php

namespace Tests\Feature;

use App\Models\ProductOrder;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ApiOrdersTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     * @test
     */
    public function get_all_orders_from_last_order_id()
    {
        $orders = ProductOrder::factory(10)->create()->map(function ($product_order) {
            return [
                'id' => $product_order->order->id,
                'customer' => $product_order->order->customer->only(['id', 'email', 'phone', 'firstname', 'lastname']),
                'status' => $product_order->order->status->only(['id', 'state']),
                'shipping_address' => $product_order->order->shippingAddress->only(['id', 'address', 'zipcode', 'city', 'country', 'customer_id']),
                'billing_address' => $product_order->order->billingAddress->only(['id', 'address', 'zipcode', 'city', 'country', 'customer_id']),
                'product_orders' => $product_order->order->productOrders->toArray(),
            ];
        });

        # Get the last order id
        $last_order_id = $orders[0]['id'] - 1;
        $response = $this->getJson('/api/v1/orders?last_order_id=' . $last_order_id, []);

        $response
            ->assertStatus(200)
            ->assertJson($orders->toArray())
            ->assertJsonStructure([
                '*' => [ 'id', 'customer', 'status', 'shipping_address', 'billing_address', 'product_orders'],
            ]);
    }

}
