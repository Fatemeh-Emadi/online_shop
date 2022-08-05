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
    function login_get()
    {
        return view("admin.admin_login");  
    }

    function login_post(Request $request)
    {
       
        $this->validate($request,[
            
            'username'=>'required',
            
            'password'=>'required|min:8',
            
        ]);
    
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
