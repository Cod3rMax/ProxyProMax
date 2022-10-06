<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMediaLink>
 */
class SocialMediaLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Discord"   => "https://discord.com",
            "Twitter"   => "https://Twitter.com",
            "Instagram" => "https://instagram.com",
            "Youtube"   => "https://youtube.com",
        ];
    }
}
