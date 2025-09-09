<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clientes")->insert([
            "nombre_cliente" => 'Aaron Soto',
            "telefono" => '636-899-7777',
            "direccion" => 'Villas del Tecm, pipila #6634',
            "email" => 'anonsito@gmail.com',
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here

        DB::table("clientes")->insert([
            "nombre_cliente" => 'Carlos Gavardin',
            "telefono" => '636-899-8888',
            "direccion" => 'Heroes de la reforma, Carranza #3534',
            "email" => 'carlitos@gmail.com',
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here
    }
}
