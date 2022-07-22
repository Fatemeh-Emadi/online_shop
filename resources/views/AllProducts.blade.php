@include('.../header')
<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.digikala.com/static/files/bc60cf05.svg" alt="" class="d-inline-block align-text-top">

            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex">

                    <input class="form-control me-2 mt-2" type="search" id="search" placeholder=" جستجو در دیجی کالا...  " aria-label="Search" style="width: 470px; background-color: rgb(233, 233, 233); border: none; font-size: 12px;">
                    <i class="fas fa-search position-absolute mt-3" style="font-size: 15px; left: 670;"></i>


                </form>
            </div>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-user"></i>
                ورود به حساب کاربری

            </button>
            <i class="fas fa-shopping-cart ms-2"></i>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand fs-6" href="#">دسته بندی کالاها</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><img src="images/store_black_24dp.svg" class="img-fluid" width="15px" height="15px"></li>
                    <li class="nav-item">

                        <a class="nav-link active " aria-current="page" href="#" style="font-size: 11px;">سوپرمارکت</a>
                    </li>
                    <li class="nav-item"><img src="images/local_offer_black_24dp.svg" class="img-fluid" width="15px" height="15px"></li>
                    <li class="nav-item">

                        <a class="nav-link " href="#" style="font-size: 11px;">تخفیف ها و پیشنهادها</a>
                    </li>
                    <li class="nav-item"><img src="images/chalet_black_24dp.svg" class="img-fluid" width="18px" height="18px"></li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" style="font-size: 11px;">دیجی کالای من</a>
                    </li>
                    <li class="nav-item"><img src="images/loupe_black_24dp.svg" class="img-fluid" width="15px" height="15px"></li>
                    <li class="nav-item">
                        <a class="nav-link " style="font-size: 11px;">دیجی پلاس</a>
                    </li>
                    <li class="nav-item"><img src="images/auto_awesome_black_24dp.svg" class="img-fluid" width="15px" height="15px"></li>
                    <li class="nav-item">
                        <a class="nav-link " style="font-size: 11px;">دیجی کلاب</a>
                    </li>
                    <li class="nav-item"><img src="images/photo_filter_black_24dp.svg" class="img-fluid" width="15px" height="15px"></li>
                    <li class="nav-item">
                        <a class="nav-link " style="font-size: 11px;">دیجی پی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled " style="font-size: 11px;">سوالی دارید؟</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" style="font-size: 11px;">فروشنده شوید</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link disabled " style="font-size: 10px;"><i class="fas fa-map-marker-alt"></i> لطفا شهر و استان خود را انتخاب
                            کنید</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <h5 class="mt-3 ms-5">همه محصولات</h5>
        <div class="col-12 mt-4 " style="background-color: white;">

            <div class="row ">
                
                
           
                @foreach($products as $product)
               
              
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <div class="card border-0">
                        <img src="{{$product->url}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a href="product/{{$product->id}}" class="text-dark" style="text-decoration:none;">
                            <p class="card-text">{{$product->description}}</p>
                            <a href="#" class="btn btn-outline-secondary mt-3">{{$product->price}} تومان</a>
                        </div>
                    </div>
                </div>
                </a>
                
              
                @endforeach
                
            </div>
        </div>
        @include('.../footer')