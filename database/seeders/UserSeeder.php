<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@emonev.test',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User Demo',
            'username' => 'demo',
            'email' => 'alfakiddrock7@gmail.com',
            'password' => Hash::make('kampasrem'),
            'role' => 'user'
        ]);
    }
}