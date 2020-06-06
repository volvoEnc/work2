<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Список заказов

    public function index(Request $request)
    {
        $orders = null;
        if ($request->has('search')) {
            if ($request->search == null) {
                return redirect()->route('admin.home');
            }
            $orders = collect([Order::find($request->get('search'))]);
        }
        else {
            $orders = Order::findAllByFilter($request->get('filter', 'work'));
        }
        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }

    // Смена статуса заказа

    public function status(Order $order, $status, Request $request)
    {
        $order->status = $status;
        $order->save();
        return back();
    }
}
