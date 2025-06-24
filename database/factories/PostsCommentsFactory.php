<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostsComments>
 */
class PostsCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'posts_id' => Post::all()->random()->id,
            'comments' => $this->faker->sentence(),
            'users_id' => User::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 month','now')
        ];
    }
}
