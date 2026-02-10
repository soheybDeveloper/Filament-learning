<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::query()->where('email', 'soheyb@gmail.com')->doesntExist()) {
            User::factory()->create([
                'name' => 'Soheyb',
                'email' => 'soheyb@gmail.com',
                'password' => bcrypt('1234'),
            ]);
        }

        if (Venue::query()->doesntExist()) {
            Venue::factory(10)->create();

        }
    }
}
