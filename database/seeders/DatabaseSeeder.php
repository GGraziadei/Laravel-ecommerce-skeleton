<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $this->call(AdminsTableSeeder::class);

        //Utenti
        $this->call(UsersTableSeeder::class);

        //Settings
        $this->call(SettingsTableSeeder::class);

        //Categorie
        $this->call(CategoriesTableSeeder::class);

        //Attributi
        $this->call(AttributeValuesTableSeeder::class);
        //$this->call(AttributesTableSeeder::class);
        
        //Brands
        $this->call(BrandsTableSeeder::class);
    }
}
