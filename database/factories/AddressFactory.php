<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->streetAddress,
            'zipcode' => $this->faker->randomNumber(6),
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'customer_id' => Customer::factory(),
        ];
    }
}
