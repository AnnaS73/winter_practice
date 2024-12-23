<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Хомяк', 'description' => 'Милый домашний грызун.', 'image' => 'hamster.jfif', 'price' => 100],
            ['name' => 'Хорёк', 'description' => 'Социальный и активный грызун.', 'image' => 'horek.jpg', 'price' => 4900],
            ['name' => 'Попугай', 'description' => 'Яркая и общительная птица.', 'image' => 'parrot.jfif', 'price' => 1900],
            ['name' => 'Морская свинка', 'description' => 'Дружелюбный и активный грызун.', 'image' => 'pig.jfif', 'price' => 590],
            ['name' => 'Варан', 'description' => 'Интеллектуальная рептилия.', 'image' => 'varan.jpg', 'price' => 15000],
        ]);
    }
}
