<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    function send_comment(Request $request)

    {
       $new_comment=new Comment();
      $user_id= Session::get("user_id");
       $new_comment->user_id=$user_id;
       $new_comment->product_id=$request["product_id"];
       $new_comment->text=$request["text"];
       $new_comment->save();
       //return redirect("/product/{id}");
       
       
    }
    function show_all_comments()
    {
        
    }

    function delete($id)
    {
        $comment=comment::find($id);
        if(!$comment) 
        {
          $message_type="danger"; 
          $message="پیدا نشد" ;
        }
        else{
            $comment->delete();
            $message_type="success"; 
            $message="با موفقیت حذف شد" ;
        }

        return redirect("/admin/comments")->with([
            "message"=>$message,
            "message_type"=>$message_type
        ]); 
    }
    function get_all()
    {
        $comments=Comment::all();
        return view("admin.comments",[
            "comments"=>$comments
        ]);

    }
}
