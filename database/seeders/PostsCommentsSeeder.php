<?php

namespace Database\Seeders;

use App\Models\PostsComments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostsComments::factory()->count(100)->create();
    }
}
