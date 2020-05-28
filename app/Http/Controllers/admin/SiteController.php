<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function show()
    {
        return view('admin.info.show');
    }

    public function update_social()
    {
        return redirect()->route('admin.site.info.show');
    }

    public function update_links()
    {
        return redirect()->route('admin.site.info.show');
    }
}
