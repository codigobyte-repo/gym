<?php

namespace Database\Seeders;

use App\Models\NombreMusculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NombreMusculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $musculos = [
            [
                'nombre' => 'Trapecio',
            ],

            [
                'nombre' => 'Deltoides',
            ],

            [
                'nombre' => 'Pectorales',
            ],

            [
                'nombre' => 'Bíceps',
            ],

            [
                'nombre' => 'Antebrazos (Flexor largo)',
            ],

            [
                'nombre' => 'Oblicuos',
            ],

            [
                'nombre' => 'Abdominales',
            ],

            [
                'nombre' => 'Aductores',
            ],

            [
                'nombre' => 'Abductores',
            ],

            [
                'nombre' => 'Cuádriceps',
            ],

            [
                'nombre' => 'Gemelos',
            ],

            [
                'nombre' => 'Dorsal',
            ],

            [
                'nombre' => 'Lumbar',
            ],

            [
                'nombre' => 'Tríceps',
            ],

            [
                'nombre' => 'Glúteos',
            ],

            [
                'nombre' => 'Isquiotibilaes',
            ],

            [
                'nombre' => 'Romboide',
            ]
        ];

        foreach($musculos as $musculo) {
            NombreMusculo::create($musculo)->first();
        }
    }
}
