<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $faker = \Faker\Factory::create();

        //creates the same hashed password for everybody
        $password = Hash::make('toptal');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@places.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->$password,
            ]);
        }
    }
}
