@extends('admintemplate')
@section('content')

<h2>ویرایش شهر</h2>
<form action="{{url('admin/cities/edit')}}" method="post">
    <div class="mb-3">
      <label class="form-label">نام</label>
      <input type="text" class="form-control" name="name" value="{{$city->name}}">
    </div>
    <input type="hidden" class="form-control" name="id" value="{{$city->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection