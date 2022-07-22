<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
//use App\Models\Information;
class ProductController extends Controller
{
    function add()
    {

    }
    function edit()
    {

    }
    function delete()
    {

    }
    function search()
    {

    }
    function get_all()
    {   $products=Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);
        //$products=DB::table('products')->join('images','products.id','=','images.product_id')->select('products.*', 'images.url')
        //->get();;
        return view("index",[
            "products"=>$products
        ]);
    }

    function show_all()
    {
        $products=Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);
        //$products=DB::table('products')->join('images','products.id','=','images.product_id')->select('products.*', 'images.url')
        //->get();;
        return view("AllProducts",[
            "products"=>$products
        ]); 
    }
  
   function index($id)
   {
    
     //$product= Product::find($id);
     $product=Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url'])->find($id);
     
    //$informations=Information::where('product_id','=',1);
    //$product=Product::join('images','products.id','=','images.product_id')->join('informations','products.id','=','informations.product_id')->get(['products.*','images.url','informations.title','informations.value'])->find($id);
       return view("product",[
           "product"=>$product,
           

       ]);
   }

    function get_by_category($catagory_id)
    {
        

    }
    

}
