<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(Link_TagsTableSeeder::class);
    }
}
