<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function dias(){
        return $this->hasMany(Dias::class);
    }

    public function ejercicios(){
        return $this->hasMany(Ejercicio::class);
    }
}
