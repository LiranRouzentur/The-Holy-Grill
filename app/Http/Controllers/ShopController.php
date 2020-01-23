<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Str;
use App\Product;
use DB;
use Cart;
use Session;
use App\Order;
use App\TheHolyGrill;


class ShopController extends MainController
{
    public function categories()
    {

        //Cart::clear();
        self::$viewData['products'] = Product::all()->toArray();
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['categories'] = Category::all()->toArray();
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;
        self::$viewData['page_title'] .= 'All Categories';
        return view('categories', self::$viewData);
    }
    public function products($curl)
    {
        self::$viewData['categories'] = Category::all()->toArray();
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        Product::getProducts($curl, self::$viewData);

        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;

        return view('products', self::$viewData);
    }

    public function search($purl)
    {

        if ($product = Product::where('ptitle', '=', $purl)->first()) {
            return $this->item(null, $product->purl, $product->categorie_id);
        } else {


            Session::flash('sm','No items Found!');

        }

        return redirect()->back();
        Session::flush('sm');

    }

    public function item($curl, $purl, $categorie_id = null)
    {

        if ($product = Product::where('purl', '=', $purl)->first()) {
            $product = $product->toArray();
            self::$viewData['countries'] = TheHolyGrill::getCountries();
        } else {
            abort(404);
        }

        $cat_search_field = !($curl) ? "c.id" : "c.curl";
        $cat_search_value = !($curl) ? $categorie_id : $curl;

        self::$viewData['categories'] = Category::all()->toArray();
        self::$viewData['products'] = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.id AS cat_id', 'c.ctitle', 'c.curl', 'c.cimage')
            ->where($cat_search_field, '=', $cat_search_value)
            ->get();
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;


        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['page_title'] .= $product['ptitle'];


        self::$viewData['item'] = $product;
        return view('item', self::$viewData);
    }


    public function addToCart(Request $request)
    {

        Product::addToCart($request['pid']);
    }

    public function cart()
    {
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['page_title'] .= 'Shopping Cart';
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;

        return view('cart', self::$viewData);
    }

    public function clearCart()
    {

        Cart::clear();
        return redirect('shop/cart');
    }

    public function removeItem($pid)
    {

        Cart::remove($pid);
       
        return redirect('shop/cart');
    }
    public function removeItemMaster($pid)
    {

        Cart::remove($pid);
        Session::flash('sm', 'Product removed successfully');
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {


        Product::updateCart($request['pid'], $request['op']);
    }
    public function orderNow()
    {

        if (Cart::isEmpty()) {

            return redirect('shop/cart');
        }
        if (!Session::has('user_id')) {

            return redirect('user/signup?rn=shop/cart');
        }
        Order::save_new();
        return redirect('shop');
    }
}
