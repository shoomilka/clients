<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        $statuses = ['planned', 'running', 'on hold', 'finished', 'cancel'];

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'status' => $statuses[rand(0,4)]
            ]);
        }
    }
}
