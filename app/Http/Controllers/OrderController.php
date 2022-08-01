<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    function get_all()
    {
        $orders=Order::all();
        return view("admin.orders",[
            "orders"=>$orders
        ]);  
    }
}
