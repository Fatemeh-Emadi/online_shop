@extends('admintemplate')
@section('content')

<h2>افزودن کالای جدید</h2>
<form action="{{url('admin/products/add')}}" method="post">
    <div class="mb-3">
      <label class="form-label"> نام محصول</label>
      <input type="text" class="form-control" name="name">
      <label class="form-label"> توضیحات محصول</label>
      <input type="text" class="form-control" name="description">
      <label class="form-label"> قیمت محصول</label>
      <input type="text" class="form-control" name="price">
      <label class="form-label">قیمت با تخفیف</label>
      <input type="text" class="form-control" name="price_off">
      <label class="form-label"> موجودی کالا</label>
      <input type="text" class="form-control" name="count">
      <label class="form-label"> دسته بندی کالا</label>
      <select name="category_id">
          @foreach($categories as $category)
          <option value="{{$category->id}}" >{{$category->title}}</option>
          @endforeach
      </select>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</form>

@endsection