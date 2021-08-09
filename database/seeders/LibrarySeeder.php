<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('library_controllers')->truncate();
        \Illuminate\Support\Facades\DB::table('library_controllers')->insert([
            [
                'bookid' => 1,
                'authorid' => 11,
                'title' => 'hi ae',
                'ISBN' => 'ok ok',
                'pub_year' => 1000,
                'available' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bookid' => 2,
                'authorid' => 13,
                'title' => 'chao ae',
                'ISBN' => 'qua ok',
                'pub_year' => 3000,
                'available' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bookid' => 3,
                'authorid' => 15,
                'title' => 'hello',
                'ISBN' => 'xin chao',
                'pub_year' => 3200,
                'available' => 62,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
