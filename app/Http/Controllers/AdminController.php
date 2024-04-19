<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('admin');
    }

    public function store_course (Request $request) {

        $request->validate([
            'name' => 'required',
            'course_type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Course::create([
            'name' => $request->name,
            'course_type' => $request->course_type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect('admin');
    }

    public function store_lesson (Request $request) {

        $request->validate([
            'name' => 'required',
            'lesson_text' => 'required',
            'lesson_img',
            'course_id' => 'required',
        ]);

        Lesson::create([
            'name' => $request->name,
            'lesson_text' => $request->lesson_text,
            'lesson_img' => $request->lesson_img,
            'course_id' => $request->course_id,
        ]);

        return redirect('admin');
    }
}
