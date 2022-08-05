<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view("admin.index");
    }
    function admin_login_get()
    {
        return view("admin.admin_login");  
    }

    function admin_login_post(Request $request)
    {
       
        
          //  $username="admin";
          //  $password="12345678";
       if(Auth::attempt(["username"=>$request["username"],"password"=>$request["password"]])){
          
            return redirect("/admin")->with([
                "message"=>"شما با موفقیت وارد حساب کاربری خود شدید"
            ]

            );
        
        }
        else{
            return redirect("/login-admin")->with([
                "message"=>"ایمیل یا گذرواژه به درستی وارد نشده است"
            ]

            );
        }
    }
}
