@extends('admintemplate')
@section('content')

<a class="btn btn-success mt-5" href="{{url('/admin/cities/add')}}">افزودن شهر جدید</a>
<table class="table table-striped ">
<tr>
    <th>#</th>
    <th>نام</th>
    <th></th>
</tr>
@foreach($cities as $city)
<tr>
    <td>{{$city->id}}</td>
    <td>{{$city->name}}</td>
    <td>
        <a class="btn btn-info btn-sm" href="cities/edit/{{$city->id}}"><i class="bi bi-pencil-square"></i></a>
        <a class="btn btn-danger btn-sm" href="cities/delete/{{$city->id}}"><i class="bi bi-trash3"></i></a>
    </td>
</tr>
@endforeach
</table>



@endsection