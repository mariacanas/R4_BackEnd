<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'fecha_publicacion' => $this->faker->dateTimeThisYear(),
            'nivel_dificultad' => $this->faker->randomElement(['bajo', 'medio', 'alto']),
            'tiempo_preparacion' => $this->faker->numberBetween(30, 180),
            'ingredientes' => $this->faker->paragraph(),
            'autor' => $this->faker->name(),
            'instrucciones_preparacion' => $this->faker->text(),
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}
