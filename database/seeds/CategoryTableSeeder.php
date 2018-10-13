<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'laptops',
                'slug' => 'laptops',
                'description' => 'A laptop, is a small, portable personal computer with a "clamshell" form factor, having, typically, a thin LCD or LED computer screen mounted on the inside of the upper lid of the "clamshell" and an alphanumeric keyboard on the inside of the lower lid.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'tablets',
                'slug' => 'tablets',
                'description' => 'A tablet, is a mobile device, typically with a mobile operating system and LCD touchscreen display processing circuitry, and a rechargeable battery in a single thin, flat package. ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'monitors',
                'slug' => 'monitors',
                'description' => 'A computer monitor is an output device which displays information in pictorial form.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'gaming computers',
                'slug' => 'gaming-computers',
                'description' => 'A gaming computer is a personal computer designed for playing computationally demanding video games. ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
