<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proxies>
 */
class ProxiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ProxyIP' => rand(100,200).".".rand(100,200).".".rand(50,200).".".rand(50,200).":".rand(1000,2000),
            'Country' => $this->faker->randomElement([$this->faker->country,"United Kingdom",$this->faker->country,"United States"]),
            'Protocol' => $this->faker->randomElement(['HTTP','HTTPS','SOCKS5','SOCKS4','SOCKS4A']),
            'Blacklisted' => rand(0,1),
        ];
    }
}
