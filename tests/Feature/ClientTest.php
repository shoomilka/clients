<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function testAddClient()
    {
        $faker = \Faker\Factory::create();
        $data = [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'password' => 'running',
            'email' => $faker->email,
        ];

        $this->post('/index.php/api/clients', $data)
            ->assertStatus(201);
    }

    public function testGetClients(){
        $response = $this->get('/index.php/api/clients/');

        return $response->assertStatus(201);
    }
}
