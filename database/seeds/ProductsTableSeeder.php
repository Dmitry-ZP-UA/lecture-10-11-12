<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'name' => 'asus x200ma (x200ma-kx315d)',
                'slug' => 'asus-x200ma-(x200ma-kx315d)',
                'description' => 'Screen Size:	11.6 inches / Processor:	2.16 GHz Intel Celeron / RAM:	4 GB DDR3 SDRAM / Hard Drive:	500 GB / Chipset Brand	intel / Card Description:	integrated / Wireless Type:	802.11.n / Brand Name:	Asus / Series:	X200MA / Item model number:	X200MA-BCL0705Z / Operating System:	Windows 8 / Item Weight:	3 pounds / Product Dimensions:	7.9 x 11.9 x 1.2 inches / Item Dimensions L x W x H:	7.9 x 11.9 x 1.2 inches / Color:	Black / Processor Brand:	Intel / Computer Memory Type:	DDR3 SDRAM',
                'price' => '20900',
                'status' => '1',
                'quantity' => '15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '2',
                'name' => 'samsung galaxy tab s 10.5 16gb',
                'slug' => 'samsung-galaxy-tab-s-10.5-16gb',
                'description' => 'Screen Size:	10.5 inches / Screen Resolution:	2560x1600 / RAM:	3 GB / Hard Drive:	16 GB / Graphics Coprocessor:	Adreno 330, ARM MALI T628 / Wireless Type:	802.11bgn, 802.11.a / Average Battery Life (in hours):	12 hours / Brand Name:	Samsung / Series:	Galaxy Tab S / Item model number:	SM-T800NZWAXAR / Hardware Platform:	Android / Operating System:	Android 4.4 Kit Kat OS / Item Weight:	1.65 pounds / Product Dimensions:	9.7 x 0.3 x 6.7 inches / Item Dimensions L x W x H:	9.74 x 0.26 x 6.68 inches / Color:	Dazzling White / Rear Webcam Resolution:	8 MP / Processor Brand:	samsung / Processor Count:	4 / Flash Memory Size:	16 GB / Batteries:	1 Lithium ion batteries required.',
                'price' => '23299',
                'status' => '1',
                'quantity' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '3',
                'name' => 'dell 23-inch screen led-lit monitor, e-series',
                'slug' => 'dell-23-inch-screen-led-lit-monitor-e-Series',
                'description' => 'Screen Size:	23 inches / Max Screen Resolution:	1920 x 1080 / Brand Name:	Dell / Item model number:	E-23 / Item Weight:	8.4 pounds / Product Dimensions:	16.1 x 5 x 24.2 inches / Item Dimensions L x W x H:	16.06 x 5.04 x 24.21 inches / Power Source:	AC / Voltage:	120 volts',
                'price' => '17938',
                'status' => '1',
                'quantity' => '20',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => '4',
                'name' => 'cyberpowerpc gamer xtreme gxivr8020a5 desktop gaming pc (intel i5-8400 6 core processor, amd rx 580 4gb, 8gb ddr4 ram, 1tb 7200rpm hdd, wifi, win 10 home 64-bit), black - vr ready',
                'slug' => 'cyberpowerpc-gamer-xtreme-gxivr8020a5-desktop-gaming-pc-black-vr-ready',
                'description' => 'Processor: 2.8 GHz Core i5 8400 / RAM:	8 GB DDR4 / Hard Drive:	1 TB Mechanical Hard Drive / Graphics Coprocessor:	RadeonTM RX 580 / Chipset Brand:	AMD / Card Description:	Dedicated / Graphics Card Ram Size:	4 GB  / Number of USB 2.0: Ports	2 / Number of USB 3.0: Ports	6 / Brand Name:	CyberpowerPC / Series:	Gamer Xtreme / Item model number:	GXiVR8020A5 / Hardware Platform:	PC / Operating System:	Windows 10 Home / Item Weight:	27.7 pounds / Product Dimensions:	18.5 x 7.9 x 17.9 inches / Item Dimensions L x W x H:	18.5 x 7.9 x 17.9 inches / Color:	Black / Processor Brand:	Intel / Processor Count:	6 / Computer Memory Type:	DDR4 SDRAM / Hard Drive Interface:	Serial ATA-600 / Hard Drive Rotational Speed:	7200 RPM  / Optical Drive Type:	None',
                'price' => '69900',
                'status' => '1',
                'quantity' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
