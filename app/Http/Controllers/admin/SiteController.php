<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\SiteInfo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function show()
    {
        return view('admin.info.show', [
            'infos' => SiteInfo::all()
        ]);
    }

    public function update_social(Request $request)
    {
        SiteInfo::setInfo($request->all());
        return redirect()->route('admin.site.info.show');
    }

    public function update_links(Request $request)
    {
        SiteInfo::setInfo($request->all());
        return redirect()->route('admin.site.info.show');
    }
}
