<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use App\Models\User_course;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index($course_id, $name) {

        $users = User::all();

        $lesson = Lesson::where('name', $name)->get();

        return view('lesson', compact('lesson', 'users'));
    }

    public function updateRank($user_id, $course_id) {

        $user = User::find($user_id);

        $user_course = User_course::where('course_id', $course_id)->update(['status' => 'completed']);

        $user->exp += 100;

        $exp = $user->exp;

        $rank = $user->rank;

        if ($exp < 200) {
            $rank = 'beginner';
        } elseif ($exp >= 200 && $exp < 400) {
            $rank = 'continuing';
        } elseif ($exp >= 400 && $exp < 600) {
            $rank = 'programmer';
        } else {
            $rank = 'pro';
        }

        $user->rank = $rank;

        $user->save();

        return redirect('profile');
    }


}
