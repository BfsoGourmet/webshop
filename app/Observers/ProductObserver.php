<?php

namespace App\Observers;

use App\Events\PriceReduction;
use App\Models\Product;

class ProductObserver
{
    public function updated (Product $product) {
        PriceReduction::dispatch($product);
    }
}
