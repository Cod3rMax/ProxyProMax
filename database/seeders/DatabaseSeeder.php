<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Proxies::factory(50)->create();
        \App\Models\Subscribe::factory(50)->create();
        \App\Models\SocialMediaLink::factory(1)->create();

    }
}
