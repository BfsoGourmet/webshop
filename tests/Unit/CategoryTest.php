<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\category;
use App\Controllers\Api\V1\ApiCategoryController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * @test
     */
    public function test_adding_products_through_api()
    {
        $data = [
            'uid' => $this->faker->uid,
            'name' => $this->faker->name,
        ];
        $this->post(route('categories.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);

    }
}
