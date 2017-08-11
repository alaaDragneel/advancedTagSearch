<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('categories')->truncate();
         $categoriesContent = ['Danganropa', 'Games', 'Laravel', 'Aldnoah', 'Gone Snow'];

         foreach ($categoriesContent as $value) {
             $categories[] = [
                 'name' => $value,
             ];
         }

         DB::table('categories')->insert($categories);

    }
}
