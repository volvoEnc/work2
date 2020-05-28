<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Список заказов

    public function index()
    {
        return view('admin.order.index');
    }

    // Смена статуса заказа

    public function status()
    {
        return back();
    }
}
