<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'login' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('123456'),
            'created_at' => '2025-01-01 00:00:00',
        ]);
    }
}
