<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvitationCode>
 */
class InvitationCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'invitation_code' => md5(bcrypt(openssl_random_pseudo_bytes(500).md5(bcrypt(md5(openssl_random_pseudo_bytes(500)))))),
            'used_for' => $this->faker->randomElement(['Subscriber','VIP','Moderator','Administrator']),
        ];
    }
}
