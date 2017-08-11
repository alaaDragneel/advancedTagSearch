<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('tags')->truncate();

        $tagsContent =
        [
            'Aldnoah', 'Kiss Shot Hurt Under Blade', 'fucking music', 'Keroueen Sasuke', 'Dragon Ball Z',

            'Makoto naigy', 'D.gray man', 'Laravel', 'Gone Snow', 'Echi Yaaa',

        ];

         foreach ($tagsContent as $value) {
             $tags[] = [
                 'tag_name' => $value,
             ];
         }

         DB::table('tags')->insert($tags);
    }
}
