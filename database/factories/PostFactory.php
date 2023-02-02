<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(3, 8)),
            'slug' => fake()->slug(),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'excerpt' => fake()->paragraph(),
            'body' => collect(fake()->paragraphs(mt_rand(5, 10)))
                        ->map(fn ($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
