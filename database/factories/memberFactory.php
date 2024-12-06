<?php

namespace Database\Factories;

use App\Models\Member; // Import the Member model
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
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // Make sure to define the model

    // Define the default state of the model
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(), // Ensures unique email
            'phone' => $this->faker->phoneNumber(), // Corrected syntax with ()
            'password' => Hash::make('password'), // Default password, consider using a more secure option
            'status' => $this->faker->randomElement(['active', 'inactive']), // Example status values
        ];
    }

    // State for unverified email
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null, // Email not verified
        ]);
    }
}
