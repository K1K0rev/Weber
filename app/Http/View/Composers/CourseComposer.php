<?php

namespace App\Http\View\Composers;

use App\Models\Course;
use Illuminate\View\View;

class CourseComposer
{
    public function compose(View $view)
    {
        $courses = Course::all();

        foreach ($courses as $course) {
        }
        $view->with('courses', $course);
    }
}
