<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            'brand' => Str::random(15),
            'year' => rand(2000,2022),
            'mileage' =>rand(1000,30000),
            'color' => Str::random(5),
            'price' => rand(500,30000),
        ]);
    }
}
