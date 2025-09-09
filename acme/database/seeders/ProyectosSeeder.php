<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("proyectos")->insert([
            "zonas_id" => 1,
            "clientes_id" => 1,
            "nombre_proyecto" => 'Parque Acuativo Spalsh',
            "fecha_inicio" => date('Y-m-d h:m:s'),
            "fecha_entrega" => date('2004-03-12'),
            "created_at" => date('2005-03-12')
        ]); // Missing semicolon added here

        DB::table("proyectos")->insert([
            "zonas_id" => 2,
            "clientes_id" => 2,
            "nombre_proyecto" => 'Granja el pollon',
            "fecha_inicio" => date('Y-m-d h:m:s'),
            "fecha_entrega" => date('2004-05-17'),
            "created_at" => date('Y-m-d h:m:s')
        ]); // Missing semicolon added here
    }
}
