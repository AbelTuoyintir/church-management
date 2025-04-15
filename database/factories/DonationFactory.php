<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),              // Random name
            'email' => $this->faker->safeEmail(),        // Random email
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
            'date' => $this->faker->date(),              // Random date
        ];
    }
}
