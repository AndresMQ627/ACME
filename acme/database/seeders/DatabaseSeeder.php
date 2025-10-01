<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {

        $this->call(users_seeder::class);
        $this->call(zonas_seeder::class);
        $this->call(proyects_seeder::class);
        $this->call(planos_seeder::class);
    }
}
