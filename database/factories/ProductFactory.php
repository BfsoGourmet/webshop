<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product' => $this->faker->word,
            'description' => $this->faker->paragraph(2,true),
            'price' => $this->faker->randomFloat(2,10,1000),
            'vegan' => $this->faker->numberBetween(0,1),
            'vegetarian' => $this->faker->numberBetween(0,1),
            'article_number' => $this->faker->ean13,
            'picture' => $this->faker->words(6,true),
            'slug' => $this->faker->word,
            'declaration' => $this->faker->words(6,true),
            'manufacturer_id' => Manufacturer::factory(),
        ];
    }
}
