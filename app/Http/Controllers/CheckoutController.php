<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function create() {
        return view('checkout');
    }

    public function store(CheckoutRequest $request) {
        $order = new Order();
        $deliveryAddress = new Address();
        $deliveryAddress->address = $request->addressDelivery;
        $deliveryAddress->zipcode = $request->postCodeDelivery;
        $deliveryAddress->city = $request->cityDelivery;
        $deliveryAddress->country = "CH";



        $customerDelivery = new Customer();
        $customerDelivery->firstname = $request->firstNameDelivery;
        $customerDelivery->lastname = $request->lastNameDelivery;
        $customerDelivery->phone = $request->phoneDelivery;
        $customerDelivery->email = $request->emailDelivery;
        $customerDelivery->save();

        $deliveryAddress->customer_id = $customerDelivery->id;

        $deliveryAddress->save();

        $order->shipping_address = $deliveryAddress->id;

        if($request->hasDifferentAddress == false){

            $order->billing_address = $deliveryAddress->id;

        }

        else {

            $billingAddress = new Address();
            $billingAddress->address = $request->addressBilling;
            $billingAddress->zipcode = $request->postCodeBilling;
            $billingAddress->city = $request->cityBilling;
            $billingAddress->country = "CH";

            $customerBilling = new Customer();
            $customerBilling->firstname = $request->firstNameBilling;
            $customerBilling->lastname = $request->lastNameBilling;
            $customerBilling->phone = $request->phoneBilling;
            $customerBilling->email = $request->emailBilling;
            $customerBilling->save();

            $billingAddress->customer_id = $customerBilling->id;

            $billingAddress->save();

            $order->billing_address = $billingAddress->id;

        }

        $order->customer_id = $customerDelivery->id;
        $order->status_id = 1;
        $order->save();
    }

}
