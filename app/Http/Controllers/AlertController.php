<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function show()
    {
        return view('client.pages.alert');
    }
}
