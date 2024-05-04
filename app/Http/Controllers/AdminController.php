<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $course_type =  Course::distinct()->pluck('course_type');

        $course_id = Course::distinct()->pluck('id');

        $lesson_id = Lesson::distinct()->pluck('id');

        $courses = Course::all();

        $lessons = Lesson::all();

        return view('admin', compact('courses', 'lessons', 'course_type', 'course_id'));
    }

    public function store_course(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'course_type' => 'required',
            'short_description' => 'required',
            'duration' => 'required',
        ]);

        Course::create([
            'name' => $request->name,
            'course_type' => $request->course_type,
            'short_description' => $request->short_description,
            'duration' => $request->duration,
        ]);

        return redirect('admin');
    }

    public function store_lesson(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'course_id' => 'required',
        ]);

        Lesson::create([
            'name' => $request->name,
            'course_id' => $request->course_id,
        ]);

        return redirect('admin');
    }

    public function destroy_course($course_id)
    {
        $course = Course::find($course_id);

        $course->delete();

        return redirect()->route('admin');
    }

    public function destroy_lesson($lesson_id)
    {
        $lesson = Lesson::find($lesson_id);

        $lesson->delete();

        return redirect()->route('admin');
    }
}
