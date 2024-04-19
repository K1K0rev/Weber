<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index() {

        $courses = Course::all();

        $course_type = Course::distinct()->pluck('course_type');

        return view('catalog', compact('courses','course_type'));
    }
}
