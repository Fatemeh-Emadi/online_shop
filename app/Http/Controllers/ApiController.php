<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function get_categories()
    {
        $categories=Category::all();
        return response()->json($categories,200,['content-type'=>'application-json; charset=utf-8'],JSON_UNESCAPED_UNICODE);
    }
}
