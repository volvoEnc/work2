<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.faq.index');
    }

    public function show($id)
    {
        return view('admin.faq.show');
    }

    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(Request $request)
    {
        return redirect()->route('admin.site.faq.index')->with('action', 'Новая запись создана');
    }

    public function update($id, Request $request)
    {
        return redirect()->route('admin.site.faq.index')->with('action', 'Успешно удалено!');
    }

    public function remove($id)
    {
        return redirect()->route('admin.site.faq.index')->with('action', 'Успешно удалено!');
    }
}
