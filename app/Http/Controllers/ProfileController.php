<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $user_data = User::all();
        $courses = Course::all();
        $course_status = Course::distinct()->pluck('course_status');

        return view('profile', compact('user_data','courses','course_status'));
    }
}
