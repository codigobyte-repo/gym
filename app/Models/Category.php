<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'imagen', 'icon'];

    /* Relacion uno a muchos */
    public function ejercicios(){
        return $this->hasManyThrough(Ejercicio::class, Subcategory::class);
    }

    /* Relacion uno a muchos */
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
}
