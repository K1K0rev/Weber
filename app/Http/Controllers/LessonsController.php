<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

        // public function lesson($id, $course_id) {

        //     $lessons = Lesson::where('course_id', $course_id)->get();

        //     $lesson = Lesson::where('id', $id)->get();

        //     return view('lesson', ['lesson' => $lesson]);
        // }
}
