<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postCategories = collect([
            "Laravel",
            "PHP",
            "JavaScript",
            "Vue",
        ]);

        $postCategories->map(function($category) {
            PostCategory::create([
                'title' => $category,
            ]);
        });
    }
}
