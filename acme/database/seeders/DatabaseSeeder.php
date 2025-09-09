<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call( ClientesSeeder::class);
        $this->call( ZonasSeeder::class);
        $this->call( ProyectosSeeder::class);
        $this->call( PlanosSeeder::class);
        $this->call( UsersSeeder::class);
    
    }
}
