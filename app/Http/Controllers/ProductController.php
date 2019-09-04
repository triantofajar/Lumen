<?php

namespace App\Http\Controllers;

use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $product = Product::all();  
        if (count($product) > 0) {
            $result = ['result' => 1, 'message' => 'success', 'data' => $product];
        } else {
            $result = ['result' => 0, 'message' => 'failed'];
        }
        return $result;
    }

    public function getMiddleware()
    {
        
    }


    //
}
