<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name' => 'HTML',
                'course_type' => 'frontend',
                'duration' => '24',
            ],
            [
                'name' => 'CSS',
                'course_type' => 'frontend',
                'duration' => '24',
            ],
            [
                'name' => 'php',
                'course_type' => 'backend',
                'duration' => '24',
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
