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



    public function show_group()
    {
        return view('admin.categories.group.show');
    }
    public function show_main()
    {
        return view('admin.categories.main.show');
    }
    public function create_group()
    {
        return view('admin.categories.group.create');
    }
    public function create_main()
    {
        return view('admin.categories.main.create');
    }




    public function add_categories_to_group($id, $id_item)
    {
        return redirect()->route('admin.categories.all.index', ['select' => $id]);
    }

    public function remove_categories_to_group($id, $id_item)
    {
        return redirect()->route('admin.categories.group.show', ['id' => $id]);
    }

    public function add_categories_to_main($id, $id_item)
    {
        return redirect()->route('admin.categories.group.index', ['select' => $id]);
    }

    public function remove_categories_to_main($id, $id_item)
    {
        return redirect()->route('admin.categories.main.show', ['id' => $id]);
    }





    public function update_group($id, Request $request)
    {
        return redirect()->route('admin.categories.group.index');
    }

    public function store_group(Request $request)
    {
        return redirect()->route('admin.categories.group.index');
    }

    public function update_main($id, Request $request)
    {
        return redirect()->route('admin.categories.main.index');
    }

    public function store_main(Request $request)
    {
        return redirect()->route('admin.categories.main.index');
    }

}
