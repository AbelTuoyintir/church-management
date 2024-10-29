<?php

namespace Database\Factories;

use App\Models\member; // Import the Member model
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class memberFactory extends Factory
{
    use HasFactory;
    protected $model = Member::class; // Bind to the Member model

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(), // Ensures unique email
            'phone' => fake()->phoneNumber(), // Corrected syntax with ()
        ];
    }
}
