<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $author = Author::inRandomOrder()->first();

        return [
            'category_id' => $category->id,
            'author_id' => $author->id,
            'name' => fake()->jobTitle(),
            'description' => fake()->boolean(50)
                ? fake()->paragraph(fake()->numberBetween(5, 7))
                : null,
            'price' => fake()->numberBetween(9, 99),
            'stock' => fake()->numberBetween(0, 99),
        ];
    }
}
