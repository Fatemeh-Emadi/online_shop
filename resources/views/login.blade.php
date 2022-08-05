<html lang="fa">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('style.css')}}">
    <link rel="stylesheet" href="{{ url('all.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body dir="rtl">
    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  
  <center>
  <div class="card mb-3 mt-5" style="width: 60%;">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-5 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-6">
        <div class="card-body py-5 px-md-5">
        <h4 class="mb-5">ورود کاربر</h4>
          <form method="post" action="{{url('/login')}}">
            <!-- Email input -->
            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" class="form-control" placeholder=" ایمیل یا نام کاربری" name="login">
                                                <label class="form-label" for="form3Example3c"></label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" placeholder="گذرواژه" name="password">
                                                <label class="form-label" for="form3Example4c"></label>
                                            </div>
                                        </div>

            <!-- 2 column grid layout for inline styling -->
            

              

            <!-- Submit button -->
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100px;">ورود</button>

          </form>

        </div>
      </div>
    </div>
  </div>
  </center>
</section>
<!-- Section: Design Block -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/2a5559cd61.js" crossorigin="anonymous"></script>
    

</body>