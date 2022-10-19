<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServerStatus>
 */
class ServerStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'operation_name' => $this->faker->unique()->randomElement(['Proxy Scrapper','Auto Proxy Checker','Auth System']),
            'operation_description' => $this->faker->unique()->randomElement(['This is a Proxy Scrapper','This is an Auto Proxy Checker','This is the Auth System']),
            'is_active' => $this->faker->randomElement([true,false]),
        ];
    }
}
