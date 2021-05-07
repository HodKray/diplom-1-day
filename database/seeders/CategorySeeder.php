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
                'photo' => '',
            ], [
                'name' => 'Пастила',
                'photo' => '',
            ], [
                'name' => 'Мармелад',
                'photo' => '',
            ],[
                'name' => 'Пряники',
                'photo' => '',
            ], [
                'name' => 'Пряники',
                'photo' => '',
            ], [
                'name' => 'Восточные',
                'photo' => '',
            ], [
                'name' => 'Снэки',
                'photo' => '',
            ], [
                'name' => 'Печенье',
                'photo' => '',
            ], [
                'name' => 'Цукаты',
                'photo' => '',
            ], [
                'name' => 'Напитки',
                'photo' => '',
            ],

        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'photo' => $category['photo'],
            ]);
        }

    }
}
