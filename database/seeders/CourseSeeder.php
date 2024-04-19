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
                'start_date' => '2024-04-20',
                'end_date' => '2024-04-20',
            ],
            [
                'name' => 'CSS',
                'course_type' => 'frontend',
                'start_date' => '2024-04-20',
                'end_date' => '2024-04-20',
            ],
            [
                'name' => 'php',
                'course_type' => 'backend',
                'start_date' => '2024-04-20',
                'end_date' => '2024-04-20',
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
