<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.reg');
    }

    protected function create(RegisterRequest $request)
    {

        $data = $request->validated();

        User::create([
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('login');
    }
}
