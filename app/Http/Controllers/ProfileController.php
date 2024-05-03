<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User_course;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {

        $user_data = Auth::user();

        $courses = Course::all();

        $user_courses = User_course::where('user_id', $user_data->id)->with('course')->get()->groupBy("status")->reverse();

        foreach ($user_courses as $item) {

            foreach ($item as $course) {
                $date = Carbon::createFromFormat('Y-m-d', $course->end_date);
                $diff = Carbon::now()->diffInDays($date);
                $days = round($diff);
                if ($course->end_date <= Carbon::now()) {
                    $course->status = 'not_completed';
                    $course->save();
                }
                $course->days = $days;
            }
        }

        return view('profile', compact('user_data', 'user_courses'));
    }

    public function updateStatus($id) {

        $user = Auth::user();

        $user_course = User_course::where('user_id', $user->id)->where('course_id', $id)->first();

        if ($user_course->end_date <= Carbon::now()) {
            $user_course->status = 'not_completed';
            $user_course->save();
        }

        return redirect('profile');
    }
}



