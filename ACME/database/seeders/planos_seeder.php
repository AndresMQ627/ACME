<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class planos_seeder extends Seeder
{
    public function run(): void
    {
        DB::table('planos')->insert([
            "proyecto_id" => 2,
            "nombre_plano" => 220204,
            "descripcion" => 'Plano de construccion piscina',
            "version" => 'XX2-2004-23',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('planos')->insert([
            "proyecto_id" => 1,
            "nombre_plano" => 220203,
            "descripcion" => 'Plano de construccion club',
            "version" => 'XX2-2005-22',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
