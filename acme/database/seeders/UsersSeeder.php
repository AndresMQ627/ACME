<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "username" => 'equisd',
            "email" => 'admin123@gmail.com',
            "nivel" => 'Admin',
            "password" => Hash::make('123'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here

        DB::table("users")->insert([
            "username" => 'Cbas',
            "email" => 'cbas@gmail.com',
            "nivel" => 'cliente',
            "password" => Hash::make('1234'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here
    }
}
