<?php

namespace Database\Seeders;

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
        User::create([
            'name' => config('seeder.user.name'),
            'email' => config('seeder.user.email'),
            'password' => password_hash(config('seeder.user.password'), PASSWORD_DEFAULT),
        ]);
    }
}
