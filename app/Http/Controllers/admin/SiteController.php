<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function show_other_settings()
    {
        return view('admin.other.other');
    }

    public function show_footer_settings()
    {
        return view('admin.other.footer');
    }

    public function show_faq_page()
    {
        return view('admin.faq.index');
    }
}
