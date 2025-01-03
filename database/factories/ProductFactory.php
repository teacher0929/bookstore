<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterMaking(function (Product $product) {
            // ...
        })->afterCreating(function (Product $product) {
            $product->categories()->sync(Category::inRandomOrder()->first()->id);
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'publisher_id' => Publisher::inRandomOrder()->first()->id,
            'name' => fake()->jobTitle(),
            'barcode' => fake()->isbn13(),
            'description' => fake()->paragraph(rand(3, 5)),
            'price' => fake()->randomNumber(rand(2, 3)),
            'discount_percent' => fake()->numberBetween(0, 70),
        ];
    }
}
