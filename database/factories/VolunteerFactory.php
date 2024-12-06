<?php

namespace Database\Factories;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolunteerFactory extends Factory
{
    protected $model = Volunteer::class;

    public function definition()
    {
        return [
            'event_name' => $this->faker->sentence(3),        // Random event name
            'volunteer_name' => $this->faker->name(),         // Random volunteer's name
            'role' => $this->faker->randomElement(['Setup', 'Kitchen Assistant', 'Youth Mentor']), // Random role
        ];
    }
}
