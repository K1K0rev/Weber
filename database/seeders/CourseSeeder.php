<?php

namespace Database\Seeders;

use App\Models\Course;
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
                'short_description' => 'Этот курс по HTML предлагает полное понимание основ веб-разработки. Вы научитесь создавать структурированные веб-страницы, используя теги и элементы HTML.',
                'duration' => '24',
            ],
            [
                'name' => 'CSS',
                'course_type' => 'frontend',
                'short_description'=> 'Этот курс по CSS даст вам все необходимые знания для стилизации веб-страниц. Вы изучите применение цвета, шрифтов, отступов и многое другое, чтобы ваши веб-страницы выглядели привлекательно и профессионально.',
                'duration' => '24',
            ],
            [
                'name' => 'js',
                'course_type' => 'frontend',
                'short_description'=> 'Этот курс по JavaScript даст вам все необходимые навыки для создания интерактивных веб-страниц. Вы научитесь управлять элементами страницы, обрабатывать события и применять асинхронные запросы.',
                'duration' => '24',
            ],
            [
                'name' => 'php',
                'course_type' => 'backend',
                'short_description'=> 'Этот курс по PHP предоставит вам все необходимые навыки для создания динамических веб-страниц. Вы научитесь писать скрипты, работать с базами данных и управлять сессиями и куками.',
                'duration' => '24',
            ],
            [
                'name' => 'java',
                'course_type' => 'backend',
                'short_description'=> 'Этот курс по Java поможет вам освоить создание надежных и масштабируемых приложений. Вы овладеете основами программирования, ООП, коллекциями и многопоточностью.',
                'duration' => '24',
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
