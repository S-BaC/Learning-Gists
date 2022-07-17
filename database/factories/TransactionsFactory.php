<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transactions>
 */
class TransactionsFactory extends Factory
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
            'borrowed_at' => $this->faker->date('Y-m-d', 'now'),
            'returned_at' => $this->faker->date('Y-m-d')
        ];
    }
}
