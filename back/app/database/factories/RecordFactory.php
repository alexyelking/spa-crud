<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    protected $model = Record::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 3),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'number_of_tickets' => rand(1, 15),
            'total_price' => rand(400, 7500),
        ];
    }
}
