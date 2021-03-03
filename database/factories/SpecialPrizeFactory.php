<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\SpecialPrize;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialPrizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpecialPrize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'price' => $this->faker->randomFloat(2,10,1000),
            'start' => $this->faker->date(),
            'end' => $this->faker->date(),
        ];
    }
}
