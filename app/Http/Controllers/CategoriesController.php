<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Product;
use Session;

class CategoriesController extends MainController
{

    public function index()
    {
        self::$viewData['categories'] = Category::all()->toArray();
        return view('cms.categories_index', self::$viewData);
    }

    public function create()
    {
        return view('cms.categories_add', self::$viewData);
    }

    public function store(CategoryRequest $request)
    {
        Category::save_new($request);
        return redirect('cms/categories');
    }


    public function show($id)
    {
        self::$viewData['item_id'] = $id;
        return view('cms.categories_index', self::$viewData);
    }


    public function edit($id)
    {
        self::$viewData['item'] = Category::find($id)->toArray();
        return view('cms.category_edit', self::$viewData);
    }

    public function update(CategoryRequest $request, $id)
    {
        Category::update_item($request, $id);
        return redirect('cms/categories');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        Session::flash('sm', 'Category removed successfully');
        return redirect('cms/categories');
    }
}
