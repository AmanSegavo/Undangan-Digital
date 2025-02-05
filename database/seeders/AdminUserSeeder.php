<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Rahman Assegaf',
            'email' => 'rahmanassegaf68@gmail.com',
            'password' => Hash::make('Lk412119@#'),
        ]);
    }
}
