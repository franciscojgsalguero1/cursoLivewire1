<?php

namespace Database\Seeders;

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
        \App\Models\User::factory([
            'name' => 'prueba',
            'email' => 'prueba@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$66gcyeipIojimGx6D9WKY.iYOfaUq3W1VHbykBgaHhoXMbwfErHNW', // password prueba12
            'remember_token' => \Illuminate\Support\Str::random(10),
            'current_team_id' => 1
        ])->create();
        \App\Models\Team::factory([
            'user_id' => 1,
            'name' => 'prueba\'s treams',
            'personal_team' => true
        ])->create();
        
        \App\Models\User::factory(10)->create();
        \App\Models\Team::factory(100)->create();
        \App\Models\Post::factory(100)->create();
    }
}
