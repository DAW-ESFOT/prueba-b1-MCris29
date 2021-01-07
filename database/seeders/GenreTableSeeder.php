<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Genre::create([
                'name' => $faker->word,
            ]);
        }

    }
}
