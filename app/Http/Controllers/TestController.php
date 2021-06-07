<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //


    public function show(Product $product){
       $countProducts = DB::table("products")->count();
        return view('productsNumber' , compact('countProducts'));
    }
}
