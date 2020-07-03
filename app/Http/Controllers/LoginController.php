<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('client.pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('home');
        }
        return back()->withErrors(['auth' => 'Логин или пароль введены неверно']);
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('home');
    }
}
