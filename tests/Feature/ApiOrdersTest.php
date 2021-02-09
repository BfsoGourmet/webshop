<?php

namespace Tests\Feature;

use App\Models\account;
use App\Models\address;
use App\Models\customer;
use App\Models\order;
use App\Models\status;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiOrdersTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     * @test
     */
    public function get_all_orders()
    {
        $account = new account();
        $account->username = "Test";
        $account->password = "Test1234";
        $account->save();

        $customer = new customer();
        $customer->email = "test@test.ch";
        $customer->phone = "012345678";
        $customer->firstname = "Test";
        $customer->lastname = "Hans";
        $customer->account_id = $account->id;
        $customer->save();

        $status = new status();
        $status->state = "Ordered";
        $status->save();

        $address = new address();
        $address->address = "Hauptstrasse 27";
        $address->zipcode = "3900";
        $address->city = "Brig";
        $address->country = "Schweiz";
        $address->customer_id = $customer->id;
        $address->save();

        $order = new order();
        $order->customer_id = $customer->id;
        $order->status_id = $status->id;
        $order->shipping_address = $address->id;
        $order->billing_address = $address->id;
        $order->save();

        $response = $this->getJson('/api/v1/orders', []);

        $response
            ->assertStatus(200)
            ->assertJson([
                'name' => 'Sally',
            ]);
    }

}
