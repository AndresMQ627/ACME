<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("planos")->insert([
            "proyectos_id" => 1,
            "nombre_plano" => "capa fachada",
            "numero_hoja" => '2',
            "total_hojas" => "3",
            "fecha_actualizacion" => date('2004-05-17'),
            "ultima_actualizacion" => date('2004-04-17'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here

        DB::table("planos")->insert([
            "proyectos_id" => 1,
            "nombre_plano" => "capa cimentacion",
            "numero_hoja" => '1',
            "total_hojas" => "1",
            "fecha_actualizacion" => date('2004-03-17'),
            "ultima_actualizacion" => date('2004-02-17'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here
    }
}
