<?php

use Illuminate\Database\Seeder;

class Link_TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('link__tags')->truncate();

         foreach (range(1, 20) as $value) {
             $linkTags[] = [
                 'video_id' => rand(1, 20),
                 'tag_id' => rand(1, 10),
             ];
         }

         DB::table('link__tags')->insert($linkTags);
    }
}
