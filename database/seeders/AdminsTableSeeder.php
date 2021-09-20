<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create('it_IT');
        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  $faker->email,
            'phone'     =>  $faker->phoneNumber,
            'password'  =>  bcrypt('password'),
        ]);
    }
}
