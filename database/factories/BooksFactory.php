<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'author' => $this->faker->name(),
            'category' => $this->faker->word(),
            'description' => $this->faker->paragraph(2),
            'rating' => $this->faker->numberBetween(1, 5),
            'number' => $this->faker->numberBetween(1,50),
            'borrow_count' => $this->faker->numberBetween(0,100),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
