<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'name' => 'Введение',
                'course_id' => '1',
            ],
            [
                'name' => 'Основы',
                'course_id' => '1',
            ],
            [
                'name' => 'Элементы',
                'course_id' => '1',
            ],
            [
                'name' => 'Атрибуты',
                'course_id' => '1',
            ],
            [
                'name' => 'Стили',
                'course_id' => '1',
            ],
            [
                'name' => 'Конец',
                'course_id' => '1',
            ],



            [
                'name' => 'Введение',
                'course_id' => '2',
            ],
            [
                'name' => 'Основы',
                'course_id' => '2',
            ],
            [
                'name' => 'Синтаксис',
                'course_id' => '2',
            ],
            [
                'name' => 'Селекторы',
                'course_id' => '2',
            ],
            [
                'name' => 'Цвета',
                'course_id' => '2',
            ],
            [
                'name' => 'Конец',
                'course_id' => '2',
            ],


            [
                'name' => 'Введение',
                'course_id' => '3',
            ],
            [
                'name' => 'Привет, мир!',
                'course_id' => '3',
            ],
            [
                'name' => 'Синтаксис',
                'course_id' => '3',
            ],
            [
                'name' => 'Структура кода',
                'course_id' => '3',
            ],
            [
                'name' => 'Переменные',
                'course_id' => '3',
            ],
            [
                'name' => 'Конец',
                'course_id' => '3',
            ]
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
