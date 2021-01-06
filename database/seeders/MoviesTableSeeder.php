<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'name' => $faker->name,
                'code' => $faker->postcode,
                'year' => $faker->year,
                'available' => $faker->numberBetween(0, 1)
            ]);
        }
    }
}
