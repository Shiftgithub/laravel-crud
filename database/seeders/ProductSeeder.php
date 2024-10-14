<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a Faker instance
        $faker = Faker::create();

        // Generate random products
        for ($i = 0; $i < 100; $i++) { // Adjust the number as needed
            Product::create([
                'name' => $faker->word, // Random word as product name
                'details' => $faker->sentence(10), // Random sentence for details
            ]);
        }
    }
}
