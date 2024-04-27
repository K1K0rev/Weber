<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\User_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {

        $user_data = Auth::user();

        $courses = $user_data->courses;

        $user_courses = User_course::all()->groupBy("status");

        return view('profile', compact('user_data','courses', 'user_courses'));
    }
}



