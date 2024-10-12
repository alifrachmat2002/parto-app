<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Andri Zalfitra',
            'email' => 'zalfitra@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'Ketua RT')->first()->id,
        ]);
        User::factory()->create([
            'name' => 'Soeharto Kanthi',
            'email' => 'zalfitra@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'Ketua RT')->first()->id,
        ]);
    }
}
