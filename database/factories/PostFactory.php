<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=> $this->faker->sentence,
            'contenido' => $this->faker->text(160),
            'fecha_publicacion' => $this->faker->date,
            'tiempo_lectura' => rand(1,20),
            'user_id'=>rand(1,10),
            'category_id'=> rand(1,10),
        ];
    }
}
