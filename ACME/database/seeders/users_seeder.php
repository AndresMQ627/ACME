<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => 'Cbas',
            "email" => 'cbas@gmail.com',
            "username" => 'cbas323',
            "password" => Hash::make('cbas123'),    
            "nivel" => 1,
            "img" => "default.jpg",
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            "name" => 'andre',
            "email" => 'andre@gmail.com',
            "username" => 'andre321',
            "password" => Hash::make('123123'),
            "nivel" => 2,
            "img" => "default.jpg",
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
