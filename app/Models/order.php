<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo(Address::class, 'shipping_address');
    }

    public function billingAddress()
    {
        return $this->belongsTo(Address::class, 'billing_address');
    }

    public function productOrders(){
        return $this->hasMany(ProductOrder::class);
    }
}
