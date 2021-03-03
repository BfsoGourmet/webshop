<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['uid','product','description',
        'price','vegan','vegetarian','article_number',
        'picture','slug','declaration','manufacturer_id'];

    public function categories()
    {
        return $this->belongstoMany(Category::class);
    }
}
