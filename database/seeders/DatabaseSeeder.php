<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 50 users with unique emails
        User::factory(1000)->create();

        // Create a specific test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '$2y$12$91eUHxYKPRXXJageyW5I/.6QwNvTA4CZlYESOFQtxPVCDN0kfO.WO', // Pre-hashed password
        ]);
    }
}
