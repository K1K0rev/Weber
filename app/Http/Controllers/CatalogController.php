<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {

        $courses = Course::all();

        $course_type = Course::distinct()->pluck('course_type');

        return view('catalog', compact('courses', 'course_type'));
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('catalog_des', compact('course'));
    }

    public function description ($id) {

        $course = Course::find($id);

        if($course->course_status == 'not_active') {
            $course->course_status = 'active';
            $course->save();
        }

        return redirect()->route('profile');
    }
}
