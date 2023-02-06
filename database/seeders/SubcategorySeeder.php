<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
        Trapecio
        Deltoides
        Pectorales
        Bíceps
        Antebrazos
        Oblicuos
        Abdominales
        Aductores
        Cuádriceps
        Gemelos
        Dorsal
        Lumbar
        Tríceps
        Glúteos
        Isquiotibilaes
        */

        $subcategories = [
            [
                'nombre' => 'Abdominales',
                'slug' => Str::slug('Abdominales'),
                'category_id' => 10,
            ],
            [
                'nombre' => 'Brazos',
                'slug' => Str::slug('Brazos'),
                'category_id' => 7,
            ],
            [
                'nombre' => 'Dorso',
                'slug' => Str::slug('Dorso'),
                'category_id' => 3,
            ],
            [
                'nombre' => 'Glúteos y Caderas',
                'slug' => Str::slug('Gluteos y Caderas'),
                'category_id' => 2,
            ],
            [
                'nombre' => 'Pecho',
                'slug' => Str::slug('Pecho'),
                'category_id' => 6,
            ],
            [
                'nombre' => 'Cuerpo Completo/Integrado',
                'slug' => Str::slug('Cuerpo Completo/Integrado'),
                'category_id' => 1,
            ],
            [
                'nombre' => 'Cuello',
                'slug' => Str::slug('Cuello'),
                'category_id' => 1,
            ],
            [
                'nombre' => 'Espalda',
                'slug' => Str::slug('Espalda'),
                'category_id' => 1,
            ],
            [
                'nombre' => 'Piernas y Pantorrillas',
                'slug' => Str::slug('Piernas y Pantorrillas'),
                'category_id' => 1,
            ],
        ];

        foreach($subcategories as $subcategory) {
            $subcategory = Subcategory::create($subcategory)->first();
        }
    }
}
