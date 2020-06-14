<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordControllerStep1 extends Controller
{
    public function show()
    {
        return view('client.pages.reset-password_step1');
    }
}
