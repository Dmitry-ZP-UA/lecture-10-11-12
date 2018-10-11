<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
                [
                    'product_id' => '1',
                    'src' => 'asus-x200ma-(x200ma-kx315d).jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'product_id' => '2',
                    'src' => 'samsung-galaxy-tab-s-10.5-16gb.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'product_id' => '3',
                    'src' => 'dell-23-inch-screen-led-lit-monitor-e-Series.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'product_id' => '4',
                    'src' => 'cyberpowerpc-gamer-xtreme-gxivr8020a5-desktop-gaming-pc-black-vr-ready.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
