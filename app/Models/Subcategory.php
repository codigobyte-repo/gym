<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'imagen', 'icon', 'category_id'];

    /* Relacion categorías: Relacion uno a muchos inversa: De subcategoria a categoria*/ 
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /* Relacion muchos a muchos*/
    public function ejercicios(){
        return $this->hasMany(Ejercicio::class);
    }
}
