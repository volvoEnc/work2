<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public $main_categories = "Привет";

    public function __construct()
    {
        // TODO: получать категории

        View::share('main_categories', $this->main_categories);
    }
}
