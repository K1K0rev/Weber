<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index() {

        $user = Auth::user();
        return view('edit_profile', ['user' => $user]);
    }


    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $updatedData = array_filter($request->all());
        $user->update($updatedData);

        return redirect()->route('profile');
    }
}
