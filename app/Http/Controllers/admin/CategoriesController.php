<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index_all()
    {
        return view('admin.categories.all.index');
    }
    public function index_group()
    {
        return view('admin.categories.group.index');
    }
    public function index_main()
    {
        return view('admin.categories.main.index');
    }
}
