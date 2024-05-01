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

        $user_courses = User_course::where('user_id', $user_data->id)->with('course')->get()->groupBy("status")->reverse();
        return view('profile', compact('user_data', 'user_courses'));
    }
}



