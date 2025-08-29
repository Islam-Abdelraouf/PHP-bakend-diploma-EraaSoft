<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Env;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => config('seeder.admin.name'),
            'email' => config('seeder.admin.email'),
            'image' => config('seeder.admin.image'),
            'password' => password_hash(config('seeder.admin.password'), PASSWORD_DEFAULT),
        ]);
    }
}
