<?php

namespace Tests\Unit\products;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Models\Product;
use Tests\TestCase;

class ProductsTest extends TestCase {
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function save_product_to_db() {
        $newProduct = new Product();
        $newProduct->name = $this->faker->word;
        $newProduct->price = $this->faker->randomFloat(2, 10, 100);
        $newProduct->save();

        $storedProduct = Product::where('id', $newProduct->id)->first();
        $this->assertEquals($newProduct->name, $storedProduct->name);
        $this->assertEquals($newProduct->price, $storedProduct->price);
    }
}
