<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@mail.ru',
            'phone' => '89832625467',
            'password' => Hash::make('123'),
            'admin' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
