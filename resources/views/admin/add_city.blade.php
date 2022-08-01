@extends('admintemplate')
@section('content')

<h2>افزودن شهر جدید</h2>
<form action="{{url('admin/cities/add')}}" method="post">
    <div class="mb-3">
      <label class="form-label">نام</label>
      <input type="text" class="form-control" name="name">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection