<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_musculos_id', 'genero', 'lado_cuerpo', 'titulo', 'descripcion', 'musculos_implicados', 'realizacion', 'comentarios', 'slug', 'video', 'imagen' ];

    public function nombres_musculos(){
        return $this->hasMany(NombreMusculo::class);
    }


}
