<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Reactions;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostsReactions>
 */
class PostsReactionsFactory extends Factory
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
            'reactions_id' => Reactions::all()->random()->id,
            'users_id' => User::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 month','now')
        ];
    }
}
