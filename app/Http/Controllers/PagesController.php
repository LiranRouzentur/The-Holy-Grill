<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use App\Product;
use App\User;
use App\TheHolyGrill;
use Cart;



class PagesController extends MainController
{


    public function home()
    {
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['products'] = Product::join('categories as c', 'c.id', '=', 'products.categorie_id')->get()->random(4)->toArray();
        self::$viewData['categories'] = Category::all()->toArray();
        self::$viewData['allProducts'] = Product::all()->toArray();

        // self::$viewData['shuffledCategories'] = Category::all()->random(4)->map(function ($category) {
        //     $category->withRandomProducts(4);
        //     return $category;
        // })->toArray();

        self::$viewData['page_title'] .= 'Home Page';
        return view('home', self::$viewData);
    }

    public function content($url)
    {
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true); // toArray

        sort($cart);
        self::$viewData['cart'] = $cart;
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['contents'] = Content::getContent($url);
        self::$viewData['page_title'] .= !empty(self::$viewData['contents'][0]->title) ? self::$viewData['contents'][0]->title : 'Site Content';
        return view('content', self::$viewData);
    }

    public function notFound()
    {
        abort(404);
    }
}
