<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class zonas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->insert([
            "nombre" => 'Pueblito Z',
            "descripcion" => 'Espacion X metros cuadrados por x metros cuadrados',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('zones')->insert([
            "nombre" => 'Pueblito x',
            "descripcion" => 'Espacion z metros cuadrados por x metros cuadrados',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
