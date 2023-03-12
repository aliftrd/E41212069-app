<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postCategories = PostCategory::get();
        $posts = [
            [
                'post_category_id' => $postCategories->random()->id,
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'thumbnail' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_category_id' => $postCategories->random()->id,
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'thumbnail' => 'https://picsum.photos/200/302',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_category_id' => $postCategories->random()->id,
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'thumbnail' => 'https://picsum.photos/200/305',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_category_id' => $postCategories->random()->id,
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'thumbnail' => 'https://picsum.photos/200/306',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_category_id' => $postCategories->random()->id,
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem!',
                'thumbnail' => 'https://picsum.photos/200/310',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Post::insert($posts);
    }
}
