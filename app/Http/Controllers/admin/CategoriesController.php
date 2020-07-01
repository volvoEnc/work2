<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\GroupCategory;
use App\Http\Controllers\Controller;
use App\MainCategory;
use DemeterChain\Main;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index_all()
    {
        $categories = Category::query()->orderByDesc('id')->get();
        return view('admin.categories.all.index', [
            'categories' => $categories
        ]);
    }
    public function index_group()
    {
        $categories = GroupCategory::query()->orderByDesc('id')->get();
        return view('admin.categories.group.index', [
            'categories' => $categories
        ]);
    }
    public function index_main()
    {
        $categories = MainCategory::query()->orderByDesc('id')->get();
        return view('admin.categories.main.index', [
            'categories' => $categories
        ]);
    }



    public function show_group(GroupCategory $groupCategory)
    {
        return view('admin.categories.group.show', [
            'category' => $groupCategory
        ]);
    }
    public function show_main(MainCategory $mainCategory)
    {
        return view('admin.categories.main.show', [
            'category' => $mainCategory
        ]);
    }
    public function create_group()
    {
        return view('admin.categories.group.create');
    }
    public function create_main()
    {
        return view('admin.categories.main.create');
    }




    public function add_categories_to_group(GroupCategory $groupCategory, Category $category)
    {
        $category->group_id = $groupCategory->id;
        $category->save();
        return redirect()->route('admin.categories.all.index', ['select' => $groupCategory->id]);
    }

    public function remove_categories_to_group(GroupCategory $groupCategory, Category $category)
    {
        $category->group_id = null;
        $category->save();
        return redirect()->route('admin.categories.group.show', ['group_category' => $groupCategory->id]);
    }

    public function add_categories_to_main(MainCategory $mainCategory, GroupCategory $groupCategory)
    {
        $groupCategory->main_id = $mainCategory->id;
        $groupCategory->save();
        return redirect()->route('admin.categories.group.index', ['select' => $mainCategory->id]);
    }

    public function remove_categories_to_main(MainCategory $mainCategory, GroupCategory $groupCategory)
    {
        $groupCategory->main_id = null;
        $groupCategory->save();
        return redirect()->route('admin.categories.main.show', ['main_category' => $mainCategory->id]);
    }





    public function update_group(GroupCategory $groupCategory, Request $request)
    {
        $groupCategory->name = $request->name;
        if ($request->has('image')) {
            $groupCategory->add_image($request);
        }
        $groupCategory->save();
        return redirect()->route('admin.categories.group.index');
    }

    public function store_group(Request $request)
    {
        $groupCategory = GroupCategory::create($request->all());
        if ($request->has('image')) {
            $groupCategory->add_image($request);
        }
        return redirect()->route('admin.categories.group.index');
    }

    public function delete_group(GroupCategory $groupCategory)
    {
        $groupCategory->delete();
        return redirect()->route('admin.categories.group.index');
    }

    public function update_main(MainCategory $mainCategory, Request $request)
    {
        $mainCategory->name = $request->name;
        if ($request->has('image')) {
            $mainCategory->add_image($request);
        }
        $mainCategory->save();
        return redirect()->route('admin.categories.main.index');
    }

    public function store_main(Request $request)
    {
        $mainCategory = MainCategory::create($request->all());
        if ($request->has('image')) {
            $mainCategory->add_image($request);
        }
        return redirect()->route('admin.categories.main.index');
    }

    public function delete_main(MainCategory $mainCategory)
    {
        $mainCategory->delete();
        return redirect()->route('admin.categories.main.index');
    }

}
