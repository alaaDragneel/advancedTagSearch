<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('videos')->truncate();

        $videosContent =
        [
            'Aldnoah Zero', 'Monogatari Shinobo', 'Monogatari Cover', 'Kill La Kill', 'Dragon Ball Z',

            'Danganropa', 'D.gray man', 'Laravel', 'Game Of Thrones', 'Echi Yaaa',

            'Aldnoah Zero S2', 'Monogatari S6', 'Monogatari Cover part2', 'Kill La Kill fucking good',

            'Dragon Ball Z Belz-Sama', 'Danganropa Mirai Arc', 'D.gray man Hollow',

            'Laravel 5.5', 'Game Of Thrones s7', 'High School Of Zombie'
        ];

         for ($i = 1; $i <= 20; $i++) {
             $videos[] = [
                 // Because the images start From 1 And The Array Zero Based Index
                 'title' => $videosContent[( $i - 1)],
                 'image' => 'images/' . $i . '.jpg',
                 'cat_id' => rand(1,5),
             ];
         }

         DB::table('videos')->insert($videos);
    }
}
