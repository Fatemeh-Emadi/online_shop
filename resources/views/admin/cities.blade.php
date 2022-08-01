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
        <a class="btn btn-info btn-sm" href="cities/edit/{{$city->id}}">ویرایش</a>
        <a class="btn btn-danger btn-sm" href="cities/delete/{{$city->id}}">حذف</a>
    </td>
</tr>
@endforeach
</table>



@endsection