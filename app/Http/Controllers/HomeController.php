<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $categories=Category::all();
        $products=Product::all();
        return view('index',[
            "categories"=>$categories,
            "products"=>$products
        ]);
    }
    function show_product()
    {
        return view('product'); 
    }
}
