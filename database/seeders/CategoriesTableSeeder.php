<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRootCategory();
        Category::factory()->count(50)->create();
    }

    protected function createRootCategory ()
    {
        //Rimuovo eventuali categorie al fine di prevenire errori sullo slug
        Category::truncate();

        //Aggiungo una root all'albero delle dipendenze
        Category::create([
            'id'            =>  1,
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);
    }
}
