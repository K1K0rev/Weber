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

        return view('profile', [ 'user_data' => $user_data], [ 'courses' => $courses]);
    }
}
