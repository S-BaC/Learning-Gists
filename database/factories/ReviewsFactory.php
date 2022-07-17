<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'book_id' => $this->faker->numberBetween(1,10),
            'rating' => $this->faker->numberBetween(1,5),
            'review' => $this->faker->paragraph(5)
        ];
    }
}
