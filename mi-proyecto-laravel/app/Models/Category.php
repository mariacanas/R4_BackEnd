<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['nombre'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'category_recipe');
    }
}
