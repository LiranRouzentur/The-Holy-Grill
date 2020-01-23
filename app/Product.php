<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use Cart;
use Session;
use App\Http\Controllers\ImageController;

class Product extends Model
{
    static public function getProducts($curl, &$viewData)
    {
        $products = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.id AS cat_id', 'c.ctitle', 'c.curl', 'c.cimage', 'c.carticle')
            ->where('c.curl', '=', $curl)
            ->paginate(4);

        if ($products->count() == 0) {
            abort(404);
        }

        $viewData['products'] = $products;
        $viewData['page_title'] .= $products[0]->ctitle . ' products';
    }
   







    static public function addToCart($pid)
    {


        if (is_numeric($pid)) {

            if ($product = self::find($pid)) {
                $product = $product->toArray();


                $product = self::find($pid)->toArray();

                if (!Cart::get($pid)) {
                    Cart::add($pid, $product['ptitle'], $product['price'], 1, ['style', 'size', 'quantity', 'color', 'image' => $product['pimage']]);
                    Session::flash('sm', $product['ptitle'] . ' was added to the cart successfully!');
                }
            }
        }
    }

    static public function updateCart($pid, $op)
    {

        if (is_numeric($pid)) { // if the items id is numeric

            if (Cart::get($pid)) { // if the item is in the cart

                if ($op == 'minus') {

                    Cart::update($pid, ['quantity' => -1]);
                } elseif ($op == 'plus') {

                    Cart::update($pid, ['quantity' => 1]);
                }
            }
        }
    }


    static public function save_new($request)
    {

        $image_name = ImageController::save_image($request, "product-images/");
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->purl = $request['url'];
        $product->particle = $request['article'];
        $product->price = $request['price'];
        $product->pimage = $image_name;
        $product->save();
        Session::flash('sm', 'Product saved successfully');
    }

    static public function update_item($request, $id)
    {

        $image_name = ImageController::update_image($request, "product-images/");
        $product = self::find($id);

        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->purl = $request['url'];
        $product->particle = $request['article'];
        $product->price = $request['price'];
        if ($image_name) {
            $product->pimage = $image_name;
        }
        $product->save();
        Session::flash('sm', 'Product saved successfully');
    }
}
