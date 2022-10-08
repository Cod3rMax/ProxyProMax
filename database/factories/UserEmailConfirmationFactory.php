<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserEmailConfirmation>
 */
class UserEmailConfirmationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1,50),
            'confirmation_code' => md5(bcrypt(openssl_random_pseudo_bytes(500).md5(bcrypt(md5(openssl_random_pseudo_bytes(500)))))),
            'confirmed' => rand(true,false),
        ];
    }
}
