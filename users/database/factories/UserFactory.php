<?php

namespace Database\Factories;

use App\Models\Affiliation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'experience_points' => $this->faker->randomNumber(),
            'remember_token' => Str::random(20),
            'email_verified_at' => now(),
            'affiliation_id' => Affiliation::factory(),
        ];
    }
}
