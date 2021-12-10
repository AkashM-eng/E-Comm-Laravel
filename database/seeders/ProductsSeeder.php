<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name' => "LG Mobile",
            'price' => '500',
            'description' => 'Smartphone',
            'category' => 'mobile',
            'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06193656/Blue_Q60_Thumb-350_upd.jpg'
        ], [
            'name' => "OPPO Mobile",
            'price' => '3500',
            'description' => 'Smartphone',
            'category' => 'mobile',
            'gallery' => 'https://opsg-img-cdn-gl.heytapimg.com/epb/202109/27/RYaFkNPoCv2Nkxnh.jpg'
        ], [
            'name' => "TV",
            'price' => '11,500',
            'description' => 'SmartTv',
            'category' => 'TV',
            'gallery' => 'https://www.pngitem.com/pimgs/m/195-1950545_mi-led-32-inch-tv-price-hd-png.png'
        ], [
            'name' => "Mi Mobile",
            'price' => '7500',
            'description' => 'Smartphone',
            'category' => 'mobile',
            'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06193656/Blue_Q60_Thumb-350_upd.jpg'
        ], [
            'name' => "Sony Mobile",
            'price' => '10500',
            'description' => 'Smartphone',
            'category' => 'mobile',
            'gallery' => 'https://opsg-img-cdn-gl.heytapimg.com/epb/202109/27/RYaFkNPoCv2Nkxnh.jpg'
        ], [
            'name' => "TV",
            'price' => '25,500',
            'description' => 'SmartTv',
            'category' => 'TV',
            'gallery' => 'https://www.pngitem.com/pimgs/m/195-1950545_mi-led-32-inch-tv-price-hd-png.png'
        ]]);
    }
}
