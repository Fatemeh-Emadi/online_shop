@extends('admintemplate')
@section('content')


<table class="table table-striped ">
<tr>
    <th>#</th>
    <th>نام</th>
    <th>ایمیل</th>
    <th>
        نام کاربری
    </th>
    <th>پسورد</th>
    <th>شهر</th>
    <th>آدرس</th>
    <th>شماره موبایل</th>
    <th></th>
</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->city->name}}</td>
    <td>{{$user->address}}</td>
    <td>{{$user->mobile_number}}</td>
    <td>
       
        <a class="btn btn-danger" href="users/delete/{{$user->id}}"><i class="bi bi-trash3"></i></a>
    </td>
</tr>
@endforeach
</table>



@endsection