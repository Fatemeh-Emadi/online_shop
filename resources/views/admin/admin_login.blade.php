@include('.../header')
<div class="container">
    <div class="row">
        <center>
    <div class="col-4 mt-4">
<form method="post" action="{{url('/login-admin')}}">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">نام کاربری</label>
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
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          مرا به خاطر بسپار
        </label>
      </div>
    </div>
  </div>
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <button type="submit" class="btn btn-primary">ورود</button>
</form>
</div>
</center>
</div>
</div>
@include('.../footer')