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

        return view('lessons', compact('lessons','count'));
    }

        public function showLesson($course_id,$name) {

            $lesson = Lesson::where('course_id', $course_id)->get();

            return view('lesson.' . $name, compact('lesson'));
        }
}
