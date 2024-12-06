<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Event name with 3 words
            'date' => $this->faker->date(),      // Random date
            'time' => $this->faker->time(),      // Random time
            'location' => $this->faker->city(),  // Random city as location
            'status' => 'Not Published',         // Default status
            'image_path' => $this->faker->imageUrl(640, 480, 'events', true), // Placeholder image URL
            'description' => $this->faker->paragraph(3), // Event description with 3 sentences
        ];
    }
}
