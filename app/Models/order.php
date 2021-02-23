<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Models\customer', 'customer_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\status', 'status_id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo('App\Models\address', 'shipping_address');
    }

    public function billingAddress()
    {
        return $this->belongsTo('App\Models\address', 'billing_address');
    }

    public function product_orders(){
        return $this->hasMany('App\Models\product_order');
    }
}
