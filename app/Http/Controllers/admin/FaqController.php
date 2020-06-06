<?php

namespace App\Http\Controllers\admin;

use App\FAQ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all()->sortByDesc('id');
        return view('admin.faq.index', [
            'faqs' => $faqs
        ]);
    }

    public function show(FAQ $FAQ)
    {
        return view('admin.faq.show', [
            'faq' => $FAQ
        ]);
    }

    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(Request $request)
    {
        $faq = FAQ::create($request->all());
        return redirect()->route('admin.site.faq.index')->with('action', 'Новая запись создана');
    }

    public function update(FAQ $FAQ, Request $request)
    {
        $FAQ->update($request->all());
        return redirect()->route('admin.site.faq.index')->with('action', 'Успешно изменено!');
    }

    public function remove(FAQ $FAQ)
    {
        $FAQ->delete();
        return redirect()->route('admin.site.faq.index')->with('action', 'Успешно удалено!');
    }
}
