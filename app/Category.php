<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use App\Http\Controllers\ImageController;
use DB;

class Category extends Model
{

    public function withRandomProducts($num_of_products)
    {
        $products = Product::where('categorie_id', $this->id)->get()->random($num_of_products)->toArray();
        $this->products = $products;
        return $this;
    }


    static public function save_new($request)
    {
        $image_name = ImageController::save_image($request, "");
        $category = new self();
        $category->ctitle = $request['title'];
        $category->curl = $request['url'];
        $category->carticle = $request['article'];
        $category->cimage = $image_name;
        $category->save();
        Session::flash('sm', 'Category saved successfully');
    }

    static public function update_item($request, $id)
    {
        $image_name = ImageController::update_image($request, "");
        $category = self::find($id);
        $category->ctitle = $request['title'];
        $category->curl = $request['url'];
        $category->carticle = $request['article'];
        if ($image_name) {
            $category->cimage = $image_name;
        }
        $category->save();
        Session::flash('sm', 'Category updated successfully');
    }
}
