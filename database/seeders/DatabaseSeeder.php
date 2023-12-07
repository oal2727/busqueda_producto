<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UnidadAlquilerSeeder;
use Database\Seeders\ClienteSeeder;
use Database\Seeders\AsesorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AsesorSeeder::class,
            ClienteSeeder::class,
            UnidadAlquilerSeeder::class,  

        ]);
     
       
    }
}
