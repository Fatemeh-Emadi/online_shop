@include('.../header')
<div class="container">
    <div class="row">
    <div class="col">
<form method="post" action="{{url('/register')}}">
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">نام</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">شماره همراه</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="mobile_number">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ایمیل</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">نام کاربری</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="username">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">گذرواژه</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="password">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> تکرار گذرواژه </label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="password2">
    </div>
  </div>
  <div class="row mb-3">
  <label  class="form-label"> شهر محل سکونت </label>
  <select class="form-select" name="city">
      @foreach($cities as $city)
        <option value="{{$city->id}}" >{{$city->name}}</option>

      @endforeach

  </select>
  </div>
  <div class="row mb-3">
  <label  class="form-label"> آدرس دقیق منزل یا محل کار</label>
  <textarea class="form-control" name="address" ></textarea>
  </div>
  
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <button type="submit" class="btn btn-primary">ثبت نام</button>
</form>
</div>
</div>
</div>
@include('.../footer')