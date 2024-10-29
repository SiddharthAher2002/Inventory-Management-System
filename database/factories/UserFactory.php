<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),  
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('Password@123'),  
            'role' => $this->faker->randomElement(['admin', 'manager', 'customer', 'staff']),  
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
