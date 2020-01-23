<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Category;
use App\Product;
use Session;
use App\TheHolyGrill;

class ProductsController extends MainController
{

    public function index()
    {
        self::$viewData['products'] = Product::all()->toArray();
        return view('cms.products_index', self::$viewData);
    }

    public function create()
    {
        self::$viewData['categories'] = Category::all()->toArray();
        return view('cms.products_add', self::$viewData);
    }

    public function store(ProductsRequest $request)
    {
        Product::save_new($request);
        return redirect('cms/products');
    }


    public function show($id)
    {
        self::$viewData['item_id'] = $id;
        return view('cms.products_index', self::$viewData);
    }


    public function edit($id)
    {
        self::$viewData['item'] = Product::find($id)->toArray();
        self::$viewData['categories'] = Category::all()->toArray();
        return view('cms.products_edit', self::$viewData);
    }

    public function update(ProductsRequest $request, $id)
    {
        Product::update_item($request, $id);
        return redirect('cms/products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('sm', 'Product removed successfully');
        return redirect('cms/products');
    }
}
