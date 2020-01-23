<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;
use App\Content;
use App\Order;
use App\TheHolyGrill;
use App\User;
use App\Category;
use Cart;

class MainController extends Controller
{
    static public $viewData = ['page_title' => 'The Holy Grill | '];

    public function __construct()
    {

        self::$viewData['categories'] = Category::all()->toArray();
        self::$viewData['countries'] = TheHolyGrill::getCountries();
        self::$viewData['menu'] = Menu::all()->toArray();
        self::$viewData['users'] = User::all()->toArray();
        

    }
}
