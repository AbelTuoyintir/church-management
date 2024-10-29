<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class; // Ensure this points to your Donation model

    public function definition()
    {
        return [
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
        ];
    }
}
