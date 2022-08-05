<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{

    function get_all()
    {
        $users=User::all();
        return view("admin.users",[
        "users"=>$users
        ]);
    }
    function profile()
    {
        return view("profile");
    }
    function login_get()
    {
       return view("login");
    }
    function login_post(Request $request)
    {
        $this->validate($request,[
            'login'=>'required',
            'password'=>'required'
    
        ]);
        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
        $request->merge([ $login_type => $request->input('login') ]);
        if (Auth::attempt($request->only($login_type, 'password'))) { 
            return redirect("/profile")->with([
                "message"=>"شما با موفقیت وارد حساب کاربری خود شدید"
            ]

            );
        }
        /*if(Auth::attempt(["email"=>$request["email"],"password"=>$request["password"]])){
            return redirect("/profile")->with([
                "message"=>"شما با موفقیت وارد حساب کاربری خود شدید"
            ]

            );
        }*/
        else{
            return redirect("/login")->with([
                "message"=>"ایمیل یا گذرواژه به درستی وارد نشده است"
            ]

            );
        }


      
    }
    function register_get()
    {
        $cities=City::all();
       return view("register")->with([
           "cities"=>$cities
       ]);
    }
    function register_post(Request $request)
    {
      $this->validate($request,[
          'email'=>'required|unique:users',
          'username'=>'required|unique:users',
          'name'=>'required|max:120',
          'password'=>'required|min:8',
          'password2'=>'required|same:password',
      ]);
      $new_user=new User();
      $new_user->name=$request["name"];
      $new_user->username=$request["username"];
      $new_user->mobile_number=$request["mobile_number"];
      $new_user->city_id=$request["city"];
      $new_user->email=$request["email"];
      $new_user->address=$request["address"];
      $new_user->password=bcrypt($request["password"]);
      $new_user->save();

      return redirect("/login");





    }


    function logout()
    {
       Auth::logout();
       return redirect("/");
    }
    function edit_info()
    {
        
    }
    function delete($id)
    {
        $user=User::find($id);
        if(!$user) 
        {
          $message_type="danger"; 
          $message="پیدا نشد" ;
        }
        else{
            $user->delete();
            $message_type="success"; 
            $message="با موفقیت حذف شد" ;
        }

        return redirect("/admin/users")->with([
            "message"=>$message,
            "message_type"=>$message_type
        ]); 
    }
}
