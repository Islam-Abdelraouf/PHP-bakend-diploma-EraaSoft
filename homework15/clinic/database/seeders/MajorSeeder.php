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
            ['name' => 'General Medicine', 'slug' => 'General Medicine', 'image' => 'general_medicine.jpg'],
            ['name' => 'Dentistry', 'slug' => 'Dentistry', 'image' => 'dentistry.jpg'],
            ['name' => 'Pharmacy', 'slug' => 'Pharmacy', 'image' => 'pharmacy.jpg'],
            ['name' => 'Nursing', 'slug' => 'Nursing', 'image' => 'nursing.jpg'],
            ['name' => 'Physiotherapy', 'slug' => 'Physiotherapy', 'image' => 'physiotherapy.jpg'],
            ['name' => 'Medical Laboratory Science', 'slug' => 'Medical Laboratory Science', 'image' => 'lab_science.jpg'],
            ['name' => 'Radiology', 'slug' => 'Radiology', 'image' => 'radiology.jpg'],
            ['name' => 'Anesthesiology', 'slug' => 'Anesthesiology', 'image' => 'anesthesiology.jpg'],
            ['name' => 'Surgery', 'slug' => 'Surgery', 'image' => 'surgery.jpg'],
            ['name' => 'Pediatrics', 'slug' => 'Pediatrics', 'image' => 'pediatrics.jpg'],
            ['name' => 'Obstetrics & Gynecology', 'slug' => 'Obstetrics & Gynecology', 'image' => 'obgyn.jpg'],
            ['name' => 'Psychiatry', 'slug' => 'Psychiatry', 'image' => 'psychiatry.jpg'],
            ['name' => 'Dermatology', 'slug' => 'Dermatology', 'image' => 'dermatology.jpg'],
            ['name' => 'Cardiology', 'slug' => 'Cardiology', 'image' => 'cardiology.jpg'],
            ['name' => 'Orthopedics', 'slug' => 'Orthopedics', 'image' => 'orthopedics.jpg'],
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}
