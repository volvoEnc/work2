<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function show()
    {
        return view('client.pages.checkout');
    }
}
