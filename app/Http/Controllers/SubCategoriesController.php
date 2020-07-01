<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        return view('client.pages.subcategories');
    }
}
