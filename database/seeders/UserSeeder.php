<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Djimmy Poliard',
            'email' => 'djimmypoliard@gmail.com',
            'password' => bcrypt('password'), // Password: password
        ]);
    }
}
