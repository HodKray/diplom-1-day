<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {

        $categories = [
            [
                'name' => 'Конфеты',
                'photo' => '1.png',
            ],[
                'name' => 'Пастила',
                'photo' => '2.png',
            ],[
                'name' => 'Мармелад',
                'photo' => '3.png',
            ],[
                'name' => 'Пряники',
                'photo' => '4.png',
            ],[
                'name' => 'Круасаны',
                'photo' => '5.png',
            ],[
                'name' => 'Торты',
                'photo' => '6.png',
            ],[
                'name' => 'Печенье',
                'photo' => '7.png',
            ],[
                'name' => 'Цукаты',
                'photo' => '8.png',
            ]

        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'photo' => $category['photo'],
            ]);
        }

    }
}
