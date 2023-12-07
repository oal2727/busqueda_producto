<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 9 ,3 y  10 no tenia
        //
        $data ='[
            {
                "empresa": "empresa 1",
                "sector": "FINANCIERO",
                "tamaño": "CORPORATIVO",
                "asesorAtencionId": "3"

            },
            {
                "empresa": "empresa 2",
                "sector": "FINANCIERO",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "3"
            },
            {
                "empresa": "empresa 3",
                "sector": "FINANCIERO",
                "tamaño": "GRANDE",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 4",
                "sector": "FINANCIERO",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "5"
            },
            {
                "empresa": "empresa 5",
                "sector": "FINANCIERO",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 6",
                "sector": "SERVICIOS empresaRIALES",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 7",
                "sector": "SERVICIOS empresaRIALES",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 8",
                "sector": "TECNOLOGÍA",
                "tamaño": "GRANDE",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 9",
                "sector": "TECNOLOGÍA",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "4"
                
            },
            {
                "empresa": "empresa 10",
                "sector": "TECNOLOGÍA",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "4"
            },
            {
                "empresa": "empresa 11",
                "sector": "TECNOLOGÍA",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "3"

            },
            {
                "empresa": "empresa 12",
                "sector": "TECNOLOGÍA",
                "tamaño": "MEDIANA",
                "asesorAtencionId": "3"
            },
            {
                "empresa": "empresa 13",
                "sector": "TECNOLOGÍA",
                "tamaño": "GRANDE",
                "asesorAtencionId": "3"
            },
            {
                "empresa": "empresa 14",
                "sector": "CONSTRUCCIÓN",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "2"
            },
            {
                "empresa": "empresa 15",
                "sector": "CONSTRUCCIÓN",
                "tamaño": "CORPORATIVO",
                "asesorAtencionId": "5"
            },
            {
                "empresa": "empresa 16",
                "sector": "CONSTRUCCIÓN",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "5"
            },
            {
                "empresa": "empresa 17",
                "sector": "CONSTRUCCIÓN",
                "tamaño": "GRANDE",
                "asesorAtencionId": "3"
            },
            {
                "empresa": "empresa 18",
                "sector": "LOGÍSTICA",
                "tamaño": "PEQUEÑA",
                "asesorAtencionId": "1"
            },
            {
                "empresa": "empresa 19",
                "sector": "LOGÍSTICA",
                "tamaño": "GRANDE",
                "asesorAtencionId": "1"
            }
        ]';
        $clienteDataArray = json_decode($data, true);

        foreach ($clienteDataArray as $cliente) {
            Cliente::create($cliente);
        }
    }
}
