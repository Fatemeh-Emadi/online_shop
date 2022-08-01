<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    function add_comment()
    {

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
