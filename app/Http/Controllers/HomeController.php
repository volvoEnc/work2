<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends MainController
{
    public function show()
    {
        // TODO: Получить популярные товары и популярные категории

        return view('client.pages.home');
    }
}
