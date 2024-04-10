<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(LoginRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return back()->withErrors('Invalid data');
        }

        $request->session()->regenerate();
        Auth::login($request->user());

        return redirect()->intedent('index');
    }
}
