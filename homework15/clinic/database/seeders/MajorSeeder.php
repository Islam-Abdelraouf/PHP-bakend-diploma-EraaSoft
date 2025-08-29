<?php

namespace Database\Seeders;

use App\Models\Major;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            ['name' => 'General Medicine', 'slug' => 'General Medicine', 'image' => 'default-150x150.png'],
            ['name' => 'Dentistry', 'slug' => 'Dentistry', 'image' => 'default-150x150.png'],
            ['name' => 'Pharmacy', 'slug' => 'Pharmacy', 'image' => 'default-150x150.png'],
            ['name' => 'Nursing', 'slug' => 'Nursing', 'image' => 'default-150x150.png'],
            ['name' => 'Physiotherapy', 'slug' => 'Physiotherapy', 'image' => 'default-150x150.png'],
            ['name' => 'Medical Laboratory Science', 'slug' => 'Medical Laboratory Science', 'image' => 'default-150x150.png'],
            ['name' => 'Radiology', 'slug' => 'Radiology', 'image' => 'default-150x150.png'],
            ['name' => 'Anesthesiology', 'slug' => 'Anesthesiology', 'image' => 'default-150x150.png'],
            ['name' => 'Surgery', 'slug' => 'Surgery', 'image' => 'default-150x150.png'],
            ['name' => 'Pediatrics', 'slug' => 'Pediatrics', 'image' => 'default-150x150.png'],
            ['name' => 'Obstetrics & Gynecology', 'slug' => 'Obstetrics & Gynecology', 'image' => 'default-150x150.png'],
            ['name' => 'Psychiatry', 'slug' => 'Psychiatry', 'image' => 'default-150x150.png'],
            ['name' => 'Dermatology', 'slug' => 'Dermatology', 'image' => 'default-150x150.png'],
            ['name' => 'Cardiology', 'slug' => 'Cardiology', 'image' => 'default-150x150.png'],
            ['name' => 'Orthopedics', 'slug' => 'Orthopedics', 'image' => 'default-150x150.png'],
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}
