<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $categories = [

            [
                'nombre' => 'Trapecio',
                'slug' => Str::slug('Trapecio'),
            ],
            [
                'nombre' => 'Glúteo',
                'slug' => Str::slug('Gluteo'),
            ],
            [
                'nombre' => 'Dorsal',
                'slug' => Str::slug('Dorsal'),
            ],
            [
                'nombre' => 'Isquiotibiales',
                'slug' => Str::slug('Isquiotibiales'),
            ],
            [
                'nombre' => 'Deltoides',
                'slug' => Str::slug('Deltoides'),
            ],
            [
                'nombre' => 'Pectorales',
                'slug' => Str::slug('Pectorales'),
            ],
            [
                'nombre' => 'Bíceps',
                'slug' => Str::slug('Biceps'),
            ],
            [
                'nombre' => 'Antebrazos',
                'slug' => Str::slug('Antebrazos'),
            ],
            [
                'nombre' => 'Oblicuos',
                'slug' => Str::slug('Oblicuos'),
            ],
            [
                'nombre' => 'Abdominales',
                'slug' => Str::slug('Abdominales'),
            ],
            [
                'nombre' => 'Aductores',
                'slug' => Str::slug('Aductores'),
            ],
            [
                'nombre' => 'Abductores',
                'slug' => Str::slug('Abductores'),
            ],
            [
                'nombre' => 'Cuádriceps',
                'slug' => Str::slug('Cuadriceps'),
            ],
            [
                'nombre' => 'Lumbar',
                'slug' => Str::slug('Lumbar'),
            ],
            
        ];

        foreach($categories as $category) {
            $category = Category::create($category)->first();
        }
        
    }
}
