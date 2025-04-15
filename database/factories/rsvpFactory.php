<?php

namespace Database\Factories;

use App\Models\Rsvp;
use Illuminate\Database\Eloquent\Factories\Factory;

class RsvpFactory extends Factory
{
    protected $model = RSVP::class;

    public function definition()
    {
        return [
            'invitation_type' => $this->faker->randomElement(['Wedding', 'Meeting', 'Conference']), // Random type of invitation
            'content' => $this->faker->paragraph(3),               // Optional content for the RSVP
            'date' => $this->faker->date(),                        // Random date
            'time' => $this->faker->time(),                        // Random time
            'location' => $this->faker->address(),                 // Random location
            'attendee_name' => $this->faker->name(),               // Random attendee name
        ];
    }
}
