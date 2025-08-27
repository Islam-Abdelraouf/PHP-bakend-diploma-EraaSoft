<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Env;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            MajorSeeder::class,
            DoctorSeeder::class,
        ]);
    }
}
