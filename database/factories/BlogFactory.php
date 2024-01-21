<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $heading = fake()->words(3, true);
        $content = fake()->paragraph(50);
        return [
            'heading_en' => $heading,
            'heading_de' => $heading,
            'content_en' => $content,
            'content_de' => $content,
            'tags' => [
                fake()->word,
                fake()->word,
                fake()->word,
                fake()->word,
                fake()->word
            ]
        ];
    }
}
