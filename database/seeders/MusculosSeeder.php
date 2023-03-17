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

            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicio para fortalecer los trapecios en casa',
                'descripcion' => 'Las extensiones de tríceps con mancuernas son un ejercicio efectivo para fortalecer los músculos de los trapecios en casa.',
                'musculos_implicados' => 'Trapecios, tríceps',
                'realizacion' => 'Agarre una mancuerna en cada mano y levante los brazos por encima de la cabeza, asegurándose de mantener los codos pegados al cuerpo.',
                'comentarios' => 'Este ejercicio requiere una buena técnica y una buena forma para evitar lesiones.',
                'slug' => 'extensiones-de-triceps-con-mancuernas',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/tricep-extension-with-dumbbells-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicio para fortalecer los trapecios en casa',
                'descripcion' => 'Las flexiones de tríceps en barra son un ejercicio efectivo para fortalecer los músculos de los trapecios en casa.',
                'musculos_implicados' => 'Trapecios, tríceps',
                'realizacion' => 'Coloque las manos en una barra con un agarre más estrecho que el ancho de los hombros y baje el cuerpo hacia la barra, asegurándose de mantener los codos pegados al cuerpo.',
                'comentarios' => 'Este ejercicio requiere una buena técnica y una buena forma para evitar lesiones.',
                'slug' => 'flexiones-de-triceps-en-barra',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/tricep-dip-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicio de aislamiento para los trapecios en el gimnasio',
                'descripcion' => 'Las extensiones de tríceps en máquina son un ejercicio de aislamiento efectivo para fortalecer los músculos de los trapecios en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Siéntese en una máquina de extensiones de tríceps y sujete las barras con las manos, luego extienda los brazos hacia arriba.',
                'comentarios' => 'Es importante ajustar la máquina a la longitud correcta de los brazos antes de comenzar a levantar peso.',
                'slug' => 'extensiones-de-triceps-en-maquina',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/tricep-extension-machine-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicio de aislamiento para los trapecios en el gimnasio',
                'descripcion' => 'Las extensiones de tríceps en banco son un ejercicio de aislamiento efectivo para fortalecer los músculos de los trapecios en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Tumbarse sobre un banco con una mancuerna en cada mano y levante las mancuernas por encima de la cabeza, asegurándose de mantener los codos pegados al cuerpo.',
                'comentarios' => 'Es importante mantener la espalda plana en el banco durante todo el ejercicio para evitar lesiones.',
                'slug' => 'extensiones-de-triceps-en-banco',
                'video' => 'https://www.youtube.com/',     
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/tricep-extension-dumbbell-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicios de tríceps con peso corporal en casa',
                'descripcion' => 'Las flexiones de tríceps son un ejercicio efectivo para fortalecer los músculos de los tríceps en casa sin necesidad de pesas.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Comience en una posición de flexión con las manos en el piso debajo de los hombros y las puntas de los pies apoyadas en el suelo. Baje el cuerpo hasta que los codos estén formando un ángulo de 90 grados, asegurándose de mantener los codos pegados al cuerpo.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones.',
                'slug' => 'flexiones-de-triceps-con-peso-corporal',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/tricep-pushup-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Ejercicios de tríceps con peso corporal en casa',
                'descripcion' => 'Las flexiones de tríceps en un solo brazo son un ejercicio efectivo para fortalecer los músculos de los tríceps en casa sin necesidad de pesas.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Comience en una posición de flexión con una mano en el piso debajo del hombro y la otra mano detrás de la cabeza. Baje el cuerpo hasta que el codo esté formando un ángulo de 90 grados, asegurándose de mantener el codo pegado al cuerpo.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera equilibrada en ambos brazos.',
                'slug' => 'flexiones-de-triceps-en-un-solo-brazo',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/single-arm-tricep-pushup-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Fondos de tríceps con barra',
                'descripcion' => 'Los fondos de tríceps con barra son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre la barra con las manos a una distancia un poco más amplia que el ancho de los hombros. Descienda hasta que el tríceps esté paralelo al suelo, luego suba de nuevo a la posición inicial.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'fondos-de-triceps-con-barra',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/bar-tricep-dip-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Fondos de tríceps en paralelas',
                'descripcion' => 'Los fondos de tríceps en paralelas son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre las barras de las paralelas con las manos y descienda hasta que el tríceps esté paralelo al suelo, luego suba de nuevo a la posición inicial.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'fondos-de-triceps-en-paralelas',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/parallel-bar-tricep-dip-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Extensiones de tríceps con mancuernas',
                'descripcion' => 'Las extensiones de tríceps con mancuernas son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre las mancuernas con las manos y levante las mancuernas por encima de la cabeza, luego baje lentamente a la posición inicial.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'extensiones-de-triceps-con-mancuernas',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/dumbbell-tricep-extension-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Extensiones de tríceps en banco',
                'descripcion' => 'Las extensiones de tríceps en banco son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre las mancuernas con las manos y coloque los codos en un banco, luego levante las mancuernas hasta que los brazos estén extendidos por encima de la cabeza.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'extensiones-de-triceps-en-banco',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/skull-crusher-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Fondos de tríceps en barra',
                'descripcion' => 'Los fondos de tríceps en barra son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre una barra con las manos y coloque los codos en un banco, luego baje lentamente el cuerpo hasta que los brazos estén casi extendidos.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'fondos-de-triceps-en-barra',
                'video' => 'https://www.youtube.com/watch?v=_ZZ6UYBJcQM',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/close-grip-bench-press-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Flexiones de tríceps con manos juntas',
                'descripcion' => 'Las flexiones de tríceps con manos juntas son un ejercicio efectivo para fortalecer los músculos de los tríceps en el hogar.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Coloque las manos juntas y los dedos hacia adelante, luego baje lentamente el cuerpo hasta que los brazos estén casi extendidos.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'flexiones-de-triceps-con-manos-juntas',
                'video' => 'https://www.youtube.com/watch?v=8uOgDYKdGc8',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/diamond-push-ups-header.jpg',
            ],
            [
                'nombre_musculos_id' => 1,
                'genero' => 'Hombre',
                'lado_cuerpo' => 'Dorso',
                'titulo' => 'Extensiones de tríceps con mancuernas',
                'descripcion' => 'Las extensiones de tríceps con mancuernas son un ejercicio efectivo para fortalecer los músculos de los tríceps en el gimnasio.',
                'musculos_implicados' => 'Trapecios',
                'realizacion' => 'Agarre dos mancuernas y coloque los codos en un banco, luego levante las mancuernas hasta que los brazos estén casi extendidos.',
                'comentarios' => 'Asegúrese de mantener una buena forma durante todo el ejercicio para evitar lesiones y trabajar de manera efectiva en los músculos de los tríceps.',
                'slug' => 'extensiones-de-triceps-con-mancuernas',
                'video' => 'https://www.youtube.com/watch?v=8uOgDYKdGc8',
                'imagen' => 'https://www.bodybuilding.com/images/2020/jun/skull-crusher-header.jpg',
            ],
           
        ];

        foreach($musculos as $musculo) {
            Musculo::create($musculo)->first();
        }
    }
}
