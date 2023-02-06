<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* Relacion uno a muchos inversa*/
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function musculos(){
        return $this->hasMany(Musculo::class);
    }

    public function trabajo(){
        return $this->hasMany(Trabajo::class);
    }

    public function estado(){
        return $this->hasMany(Estado::class);
    }

    
}
