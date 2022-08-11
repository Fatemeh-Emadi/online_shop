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
      <label class="form-label"> تصویر</label>
      <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="image">
 </div>
 <div id="holder" style="margin-top:15px;max-height:100px;"></div>
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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script> $('#lfm').filemanager('image');</script>
@endsection