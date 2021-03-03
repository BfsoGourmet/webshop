<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['uid','name'];

    public function products()
    {
        return $this->belongstoMany(Product::class);
    }
}
