<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'title' => 'Sapphire NITRO+ Radeon RX 6600 XT Gaming 8GB',
            'description' => 'AMD Radeon™ RX 6600 XT, Overclocked 8.0 GB GDDR6 (128bit), Connection via PCIe 4.0 Active Cooling (Tri-Slot) 1x HDMI, 3x DisplayPort Power Supply: 1x 8pin, 500 W PSU recommended Card length approx. 240 mm',
            'pic_url' => 'https://img.computerunivers.net/images/400x400/908408551653DD83648F4E1C881ABDBA.jpg',
            'count_of_votes' => 10,
            'price' => 57990,
            'url_in_shop' => 'https://www.computeruniverse.net/en/p/90840855',
            'slug' => '6600',
            'category_id' => 10,
            'in_trade' => True,
        ]);
    }
}
