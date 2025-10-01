<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class proyects_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('proyectos')->insert([
            "user_id" => 1,
            "nombre_proyecto" => 'anonspool',
            "descripcion" => 'Piscina de aron',
            "zone_id" => 2,    
            "fecha_inicio" =>  date('2000-05-10'),
            "fecha_entrega" => date('2004-12-3'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('proyectos')->insert([
            "user_id" => 2,
            "nombre_proyecto" => 'mamitas club',
            "descripcion" => 'club del andres en proceso',
            "zone_id" => 1,    
            "fecha_inicio" =>  date('2004-03-10'),
            "fecha_entrega" => date('2005-12-3'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
