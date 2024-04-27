<?php

namespace App\Http\View\Composers;

use App\Models\Lesson;
use Illuminate\View\View;

class LessonComposer
{
    public function compose(View $view)
    {
        $lesson = Lesson::all();
        $view->with('lessons', $lesson);
    }
}
