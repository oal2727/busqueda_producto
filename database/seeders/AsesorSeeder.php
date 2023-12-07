<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asesor;
use Database\Seeders\UnidadAlquilerSeeder;
use Database\Seeders\ClienteSeeder;

class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data ='[
            {
                "nombre": "MAURICIO",
                "correo": "mauricio@leasein.pe",
                "celular": "999888777"
            },
            {
                "nombre": "DIEGO",
                "correo": "diego@leasein.pe",
                "celular": "999777666"
            },
            {
                "nombre": "ALEJANDRO",
                "correo": "alejandro@leasein.pe",
                "celular": "999666555"
            },
            {
                "nombre": "ERIKA",
                "correo": "erika@leasein.pe",
                "celular": "999555444"
            },
            {
                "nombre": "NICOLE",
                "correo": "nicole@leasein.pe",
                "celular": "999444333"
            }
        ]';
        $clienteDataArray = json_decode($data, true);

        foreach ($clienteDataArray as $cliente) {
            Asesor::create($cliente);
        }
    }
}
