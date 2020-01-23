<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SearchController extends MainController
{
    public function search($search)
    {


            $products = DB::table('products as p')
                ->join('categories as c', 'c.id', '=', 'p.categorie_id')
                ->select('p.ptitle', 'p.purl', 'c.curl')
                ->where('p.ptitle', 'like',  '%' . $search . '%')
                ->get();




            if ($products) {


             return response()->json($products);
            } 

    }
}
