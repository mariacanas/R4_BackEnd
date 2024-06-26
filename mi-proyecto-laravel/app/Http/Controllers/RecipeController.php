<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
class RecipeController extends Controller
{
    public function index()
    {
        // Obtener las 2 recetas que hemos creado con datos reales
        $fixedRecipes = Recipe::whereIn('id', [1, 2])->get();

        // Obtener 3 recetas aleatorias excluyendo las 2 anteriores
        //Estas van a ser 3 recetas de las que se han creado de forma elatoria
        $randomRecipes = Recipe::inRandomOrder()->take(3)->get();

        $recipes = $fixedRecipes->merge($randomRecipes);

        return view('home', ['recipes' => $recipes]);
    }

    //Muestra una receta en específico porque le estamos pasando el id
    public function show($id){
        $recipe = Recipe::findOrFail($id);
        return view('recipe', ['recipe' => $recipe]);
    }

    //Método para obtener las recetas de una página
    public function apiPage($page){
        //Selección de los campos id, nombre, fecha de publicación de cada una de las recetas
        $recipes = Recipe::select('id', 'nombre', 'fecha_publicacion')->paginate(10, ['*'], 'page', $page);
        return response()->json($recipes);
    }

    //Metodo para obtener la información de una receta por su id, para que nos lo devuelva en formato JSON
    public function apiIndex($id){
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe);
    }
}
