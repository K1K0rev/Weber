<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index() {

        return view('edit_profile');
    }

    public function store_data (Request $request) {

        $request->validate([
            'login',
            'icon',
            'nickname',
            'email' => 'required',
            'password',
        ]);

        $id = Auth::id();

        $data = User::create([
            'id' => $id,
            'icon' => $request->icon,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        }
}
