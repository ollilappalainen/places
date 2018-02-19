<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Place::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Place::create([
                'title' => $faker->name,
                'description' => $faker->paragraph,
                'geometry_lat' => $faker->integer,
                'geometry_lng' => $faker->integer,
                'opening' => $faker->time,
                'closing' => $faker->time,
                'is_favorite' => $faker->boolean,
            ]);
        }
    }
}
