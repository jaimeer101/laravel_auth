<?php

namespace Database\Seeders;

use App\Models\PostsReactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsReactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostsReactions::factory()->count(100)->create();
    }
}
