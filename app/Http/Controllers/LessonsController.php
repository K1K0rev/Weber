<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index($course_id)
    {

        $lessons = Lesson::where('course_id', $course_id)->get();

        $count = 1;

        return view('lessons', ['lessons' => $lessons], compact('count'));
    }

        public function showLesson($course_id, $id) {

            $lesson = Lesson::where('course_id', $course_id)->get();

            $name = $lesson->name;

            return view('lesson.' . $name, compact('lesson'));
        }
}
