<?php

namespace Plateena\Demo\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Plateena\Demo\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
        ];
    }
}

