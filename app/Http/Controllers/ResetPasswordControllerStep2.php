<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordControllerStep2 extends Controller
{
    public function show(Request $request)
    {
        if (!$request->has('key')) {
            return redirect()->route('home');
        }
        return view('client.pages.reset-password_step2');
    }
}
