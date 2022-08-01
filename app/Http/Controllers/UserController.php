<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function get_all()
    {
        $users=User::all();
        return view("admin.users",[
        "users"=>$users
        ]);
    }
    function sign_up()
    {

    }
    function sign_in()
    {
        
    }
    function sign_out()
    {
        
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
