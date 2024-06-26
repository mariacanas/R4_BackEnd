<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre', 'fecha_publicacion', 'nivel_dificultad', 'tiempo_preparacion',
        'ingredientes', 'autor', 'instrucciones_preparacion', 'imagen','category'
    ];

    protected $casts = [
        'fecha_publicacion' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_recipe');
    }
}
