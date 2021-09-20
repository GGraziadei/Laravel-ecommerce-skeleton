<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('it_IT');
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name'      =>  $faker->name,
                'email'     =>  $faker->email,
                'address'   =>  $faker->address,
                'password'  =>  bcrypt('password'),
            ]);
        }  
    }
}
