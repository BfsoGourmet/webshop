<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiCategoriesTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function create_new_category()
    {
        $response = $this->postJson('/api/v1/categories', ['name' => 'Sally']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'name' => 'Sally',
            ]);
    }

    /**
     * @return void
     * @test
     */
    public function update_new_category()
    {
        $response = $this->postJson('/api/v1/categories', ['name' => 'Sally']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'name' => 'Sally',
            ]);

        $category = $response->json();

        $response = $this->patchJson('/api/v1/categories/'.$category['id'], ['name' => 'Sally2']);
        $response
            ->assertStatus(200)
            ->assertJson([
                'id' => $category['id'],
                'name' => 'Sally2',
            ]);
    }

    /**
     * @return void
     * @test
     */
    public function destroy_new_category()
    {
        $response = $this->postJson('/api/v1/categories', ['name' => 'Sally']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'name' => 'Sally',
            ]);

        $category = $response->json();

        $response = $this->deleteJson('/api/v1/categories/'.$category['id']);
        $response
            ->assertStatus(200)
            ->assertJson([
                'response' => 'successful',
            ]);
    }


}
