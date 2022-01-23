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
            'title' => $this->faker->words(3, true),
            'content' => $this->faker->paragraph(1) ,
            'created_at' => $this->faker->dateTime('now'),
            'updated_at' => $this->faker->dateTime('now'),
            'rubric_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
