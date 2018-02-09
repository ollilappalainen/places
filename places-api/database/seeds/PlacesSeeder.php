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
                'name' => $faker->name,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
