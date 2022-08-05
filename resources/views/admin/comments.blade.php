@extends('admintemplate')
@section('content')


<table class="table table-striped ">
<tr>
    <th>#</th>
     <th>نام کاربری</th>
     <th>نام محصول</th>
    <th>نظر کاربر</th>
    <th></th>
</tr>
@foreach($comments as $comment)
<tr>
    <td>{{$comment->id}}</td>
    <td>{{$comment->user->username}}</td>
    <td>{{$comment->product->name}}</td>
    <td>{{$comment->text}}</td>
    <td>
       
    
        <a class="btn btn-danger" href="comments/delete/{{$comment->id}}"><i class="bi bi-trash3"></i></a>
    </td>
</tr>
@endforeach
</table>



@endsection