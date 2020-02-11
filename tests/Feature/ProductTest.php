<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testAddProduct()
    {
        $faker = \Faker\Factory::create();
        $data = [
            'name' => $faker->sentence,
            'description' => $faker->paragraph,
            'status' => 'running',
        ];

        $this->post('/index.php/api/products', $data)
            ->assertStatus(201);

    }

    public function testGetProducts(){
        $response = $this->get('/index.php/api/products/');
        return $response->assertStatus(201);
    }
}
