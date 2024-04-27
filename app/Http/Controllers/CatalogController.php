<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index()
    {

        $user_data = Auth::user();

        $courses = Course::whereDoesntHave('user', function ($query) use ($user_data) {
            $query->where('user_id', $user_data->id);
        })->get();

        return view('catalog', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('catalog_des', compact('course'));
    }

    public function description ($id) {

        $user_id = auth()->user()->id;

        $course = Course::find($id);

        $course = User_course::create(
            [
                'user_id'=> $user_id,
                'course_id'=> $course->id,
                'status' => 'processing',
            ]
        );

        return redirect()->route('profile');
    }
}

