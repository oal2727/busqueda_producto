<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnidadAlquiler;

class UnidadAlquilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data='
        [
            {
                "codigo": "LAP-00001",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00002",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00003",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00004",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00005",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00006",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00007",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00008",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00009",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00010",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00011",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00012",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00013",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00014",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00015",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00016",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00017",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00018",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00019",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00020",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00021",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00022",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00023",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00024",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00025",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "7"
            },
            {
                "codigo": "LAP-00026",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00027",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "16"
            },
            {
                "codigo": "LAP-00028",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "17"
            },
            {
                "codigo": "LAP-00029",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "18"
            },
            {
                "codigo": "LAP-00030",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00031",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "16"
            },
            {
                "codigo": "LAP-00032",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "17"
            },
            {
                "codigo": "LAP-00033",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "18"
            },
            {
                "codigo": "LAP-00034",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00035",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00036",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00037",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00038",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00039",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00040",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00041",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00042",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00043",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00044",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00045",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00046",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00047",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00048",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00049",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "19"
            },
            {
                "codigo": "LAP-00050",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00051",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00052",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00053",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00054",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00055",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00056",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00057",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00058",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00059",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00060",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00061",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00062",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00063",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00064",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00065",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00066",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00067",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00068",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00069",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00070",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00071",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00072",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00073",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00074",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00075",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00076",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00077",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00078",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00079",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "4",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00080",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "4",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00081",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "8",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00082",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "2",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00083",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I5",
                "generacion": "2",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00084",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I5",
                "generacion": "2",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00085",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I5",
                "generacion": "2",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00086",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "3",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00087",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "3",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00088",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00089",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00090",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00091",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "11"
            },
            {
                "codigo": "LAP-00092",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00093",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00094",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00095",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00096",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00097",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00098",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00099",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00100",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00101",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00102",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00103",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00104",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00105",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00106",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00107",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00108",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "15"
            },
            {
                "codigo": "LAP-00109",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00110",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00111",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00112",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00113",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00114",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00115",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00116",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00117",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00118",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00119",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00120",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00121",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00122",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00123",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00124",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00125",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00126",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00127",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00128",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "12"
            },
            {
                "codigo": "LAP-00129",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I7",
                "generacion": "4",
                "clienteId": "13"
            },
            {
                "codigo": "LAP-00130",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "14"
            },
            {
                "codigo": "LAP-00131",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "15"
            },
            {
                "codigo": "LAP-00132",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "16"
            },
            {
                "codigo": "LAP-00133",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00134",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00135",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00136",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00137",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00138",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00139",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00140",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00141",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00142",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00143",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "4",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00144",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00145",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00146",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00147",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00148",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00149",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00150",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I3",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00151",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00152",
                "tipo_ua": "LAPTOP",
                "marca": "LENOVO",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00153",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00154",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00155",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00156",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00157",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00158",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00159",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00160",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00161",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00162",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00163",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00164",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "6"
            },
            {
                "codigo": "LAP-00165",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "5"
            },
            {
                "codigo": "LAP-00166",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "4"
            },
            {
                "codigo": "LAP-00167",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00168",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "2"
            },
            {
                "codigo": "LAP-00169",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00170",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00171",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00172",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00173",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00174",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00175",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00176",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00177",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00178",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00179",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00180",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00181",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00182",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00183",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00184",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00185",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "1"
            },
            {
                "codigo": "LAP-00186",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "8"
            },
            {
                "codigo": "LAP-00187",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00188",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00189",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00190",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00191",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00192",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00193",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00194",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00195",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00196",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00197",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00198",
                "tipo_ua": "LAPTOP",
                "marca": "HP",
                "procesador": "CORE I5",
                "generacion": "5",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00199",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "3"
            },
            {
                "codigo": "LAP-00200",
                "tipo_ua": "LAPTOP",
                "marca": "DELL",
                "procesador": "CORE I7",
                "generacion": "6",
                "clienteId": "3"
            }
        ]
        ';
        $productDataArray = json_decode($data, true);

        foreach ($productDataArray as $productData) {
            UnidadAlquiler::create($productData);
        }
    }
}
