<?php

namespace Database\Seeders;

use App\Models\Musculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $musculos = [

            /* Hombre frente */
            [
                'musculo' => 'Trapecio',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Ambos'
            ],
            [
                'musculo' => 'Deltoides',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Ambos'
            ],
            [
                'musculo' => 'Pectorales',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Bíceps',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Antebrazos (Flexor largo)',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Oblicuos',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Abdominales',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Aductores',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Cuádriceps',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Gemelos',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Ambos'
            ],

            /* Hombre Dorso */
            [
                'musculo' => 'Dorsal',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Lumbar',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Tríceps',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Glúteos',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Isquiotibilaes',
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso'
            ],


            /* Mujer frente */
            [
                'musculo' => 'Trapecio',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Ambos'
            ],
            [
                'musculo' => 'Deltoides',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Ambos'
            ],
            [
                'musculo' => 'Pectorales',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Bíceps',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Antebrazos (Flexor largo)',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Oblicuos',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Abdominales',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Aductores',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Cuádriceps',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Frente'
            ],
            [
                'musculo' => 'Gemelos',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Ambos'
            ],

            /* Mujer Dorso */
            [
                'musculo' => 'Dorsal',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Lumbar',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Tríceps',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Glúteos',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Dorso'
            ],
            [
                'musculo' => 'Isquiotibilaes',
                'genero' => 'Mujer',
                'lado_cuerpo' => 'Dorso'
            ],
        ];

        foreach($musculos as $musculo) {
            Musculo::create($musculo)->first();
        }
    }
}
