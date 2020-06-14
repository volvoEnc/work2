<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request)
    {
        return view('client.pages.cart');
    }
}
