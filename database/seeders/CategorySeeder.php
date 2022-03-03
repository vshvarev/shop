<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 2,
            'title' => 'two',
            'parse_url' => 'https://img.computerunivers.net/images/400x400/908408551653DD83648F4E1C881ABDBA.jpg',
            'parent_id' => 10,
            'slug' => '7700',
            'in_main_page' => True,
        ]);
    }
}
