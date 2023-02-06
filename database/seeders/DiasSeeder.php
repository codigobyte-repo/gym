<?php

namespace Database\Seeders;

use App\Models\Dias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dias = [
            [
                'nombre' => 'Lunes',
            ],
            [
                'nombre' => 'Martes',
            ],
            [
                'nombre' => 'Miércoles',
            ],
            [
                'nombre' => 'Jueves',
            ],
            [
                'nombre' => 'Viernes',
            ],
            [
                'nombre' => 'Sábado',
            ],
            [
                'nombre' => 'Domingo',
            ],
        ];

        foreach($dias as $dia) {
            Dias::create($dia)->first();
        }
    
    }
}
