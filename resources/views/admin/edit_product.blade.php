@extends('admintemplate')
@section('content')

<h2>ویرایش کالا</h2>
<form action="{{url('admin/products/edit')}}" method="post">
    <div class="mb-3">
    <label class="form-label">تصویر</label>
      <input type="text" class="form-control" name="image" value="/{{$product->images->first()->url}}">
      <label class="form-label">نام</label>
      <input type="text" class="form-control" name="name" value="{{$product->name}}">
      <label class="form-label">توضیحات</label>
      <input type="text" class="form-control" name="description" value="{{$product->description}}">
      <label class="form-label">قیمت</label>
      <input type="text" class="form-control" name="price" value="{{$product->price}}">
      <label class="form-label">قیمت با تخفیف</label>
      <input type="text" class="form-control" name="price_off" value="{{$product->price_off}}">
      <label class="form-label">دسته بندی</label>
      <input type="text" class="form-control" name="category" value="{{$product->category_id}}">
      <label class="form-label">موجودی</label>
      <input type="text" class="form-control" name="count" value="{{$product->count}}">
    </div>
    <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection