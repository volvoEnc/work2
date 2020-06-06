<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends MainController
{
    public function show()
    {
        return view('client.pages.auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->all());
        Auth::login($user);
        return back();
    }
}
