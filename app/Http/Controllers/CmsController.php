<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CmsController extends MainController
{
    public function dashboard()
    {

        return view('cms.dashboard', self::$viewData);
    }
    public function orders()
    {

        self::$viewData['orders'] = Order::getOrders();
        return view('cms.orders', self::$viewData);
    }
    public function ajaxorders()
    {

        return Order::getMonthlyOrdersData();
    }
}
