<?php

namespace App;

use Cart;
use DateTime;
use Session;
use DB;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    static public function getOrders()
    {

        return DB::table('orders as o')
            ->join('users as u', 'u.id', '=', 'o.user_id')
            ->select('o.*', 'u.name')
            ->get() // can replace with pagination
            ->toArray();
    }

    static public function save_new()
    {

        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true);
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cart);
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm', "We got your order ! It's on the way !");
        Cart::clear();
    }

    static public function getAllMonths()
    {

        $month_array = [];

        $orders_dates = DB::table('orders')
            ->orderBy('created_at', 'ASC')
            ->get()
            ->pluck('created_at');
        $orders_dates = json_decode($orders_dates);


        if (!empty($orders_dates)) {
            foreach ($orders_dates as $pre_date) {
                $date = new DateTime($pre_date);
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[$month_no] = $month_name;
            }
        }
        return $month_array;
    }



    static public function getMonthlyOrdersSum($month)

    {

        $monthly_order_sum =  Order::whereMonth('created_at', $month)
            ->sum('total');

        return $monthly_order_sum;
    }




    static public function getMonthlyOrdersData()

    {
        $monthly_orders_sum_array = [];
        $month_array = self::getAllMonths();
        $month_name_array = [];
        if (!empty($month_array)) {
            foreach ($month_array as $month_no => $month_name) {
                $monthly_orders_sum = self::getMonthlyOrdersSum($month_no);
                array_push($monthly_orders_sum_array, $monthly_orders_sum);
                array_push($month_name_array, $month_name);
            }
        }
        $max_no = intval(max($monthly_orders_sum_array));
        $monthly_orders_data_array = [
            'months' =>  $month_name_array,
            'order_sum_data' => $monthly_orders_sum_array,
            'max' => $max_no
        ];

        return $monthly_orders_data_array;
    }
}
