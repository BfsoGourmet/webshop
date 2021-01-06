<?php

namespace App\Models;

use App\Events\PriceReduction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
