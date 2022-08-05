@include('.../header')



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
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">

                <img src="images/pic.gif" class="img-fluid rounded-3" alt="">
            </div>


          
        </div>
    </div>



    <div class="row bg-danger py-4 mt-3">
        <div class="col">
            <div class="container bg-danger">
                <div class="row ">

                    <div class="col-lg d-none d-lg-block  d-xl-block d-xxl-block ">
                        <img src="images/4.png" class="img-fluid">
                        <button type="button" class="btn btn-outline-light ms-3">مشاهده همه </button>
                    </div>
                    @php $i = 0; @endphp
                    @foreach($products as $product)

                    <div class="col-lg col-md-6 col-sm-12 mt-1">
                        <div class="card" style="width: 16rem; height:30rem;">
                            <img src="{{$product->images->first()->url}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text " style="font-size:14px;">{{$product->description}}</p>

                                <a href="#" class="btn btn-outline-danger">{{$product->price}} تومان</a>
                            </div>
                        </div>
                    </div>
                    @php $i++; @endphp
                    @if($i == 3) @break @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="container py-4 mt-1">'
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src="images/5.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/6.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/7.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/8.jpg" class="img-fluid rounded-3">

            </div>
        </div>
    </div>
    <div class="row bg-success py-4 mt-4">
        <div class="col">
            <div class="container">
                <div class="row ">

                    <div class="col-lg d-none d-lg-block  d-xl-block d-xxl-block ">
                        <img src="images/9.png" class="img-fluid">
                        <button type="button" class="btn btn-outline-light ms-3">مشاهده همه </button>
                    </div>
                    @foreach($products as $product)
                    @if($product->category_id==4)
                    <div class="col-lg col-md-6 col-sm-12 mt-1">
                        <div class="card">
                            <img src="{{$product->images->first()->url}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text" style="font-size: 12px;">{{$product->description}}</p>
                                <a href="#" class="btn btn-outline-success">{{$product->price}} تومان</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-3 shadow-sm" style="background-color: white; border-radius: 7px;">
            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-tv fs-1 text-primery"></span></a>
                <p class="text-dark mt-3 " style="font-size: 13px;">کالای دیجیتال</p>
                <p class="text-primary mt-3 " style="font-size: 11px;">+990000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-wrench fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">ابزار و تجهیزات </p>
                <p class="text-primary mt-3" style="font-size: 11px;">+179000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-file-zip fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">پوشاک</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+135000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-emoji-smile fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">کودک و نوزاد</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+121000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-basket3 fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">سوپر مارکتی</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+721000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-heart fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">زیبایی و سلامت</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+21000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-house fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">خانه و آشپزخانه</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+231000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-pen fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">لوازم و تحریر</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+121000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-bicycle fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">ورزش و سفر</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+421000 کالا</p>

            </div>

            <div class="col-lg col-md col-sm text-center  mt-3">
                <a href=""><span class="bi bi-gem fs-1 text-primery"></span></a>
                <p class="text-dark mt-3" style="font-size: 13px;">بومی</p>
                <p class="text-primary mt-3" style="font-size: 11px;">+81000 کالا</p>

            </div>


        </div>
    </div>

    <div class="container-fluid">

        <div class="row bg-light py-4  mt-3 ">
            <div class="col-2 ">
                <div class="row py-2">
                    <div class="col-lg d-none d-lg-block  d-xl-block d-xxl-block ">
                        <div class="card" style="border: none;">
                            <img src="images/bookmark-check.svg" class="card-img-top mt-1" alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-center">شخصی سازی پیشنهادها</h6>
                                <p class="card-text text-center">برای مشاهده پیشنهادهای مناسب خودو همچنین داشتن
                                    تجربه بهتر وارد حساب کاربری شوید.</p>
                                <a href="#" class="btn btn-danger">ورود به حساب دیجی کالا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 ">

                <div class="row py-3 shadow-sm" style=" background-color: white; border-radius: 7px;">
                    <h5>مد و پوشاک</h5>
                    <p>بر اساس بازدید های شما</p>
                    @foreach($products as $product)
                    @if($product->category_id==2)
                    <div class="col-lg col-md-6 col-sm-12">
                        <div class="card" style="border: none;">
                            <img src="{{$product->images->first()->url}}" class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">{{$product->description}}</p>
                                <a href="#" class="btn btn-outline-danger">{{$product->price}} تومان</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


                </div>
            </div>


        </div>
    </div>

    <div class="container ">'
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src="images/12.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/13.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/14.jpg" class="img-fluid rounded-3">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-1">
                <img src=" images/15.jpg" class="img-fluid rounded-3">

            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="col-12 mt-4 shadow-sm rounded-3" style="background-color: white;">

            <div class="row ">
                <h5 class="mt-3 ms-3">انواع تلفن همراه</h5>
                <p class="ms-3">بر اساس بازدید های شما</p>
                @foreach($products as $product)
                @if($product->category_id==1)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0">
                        <img src="{{$product->images->first()->url}}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <p class="card-text">{{$product->description}}</p>
                            <a href="#" class="btn btn-outline-secondary">{{$product->price}} تومان</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


            </div>
        </div>


    </div>
</div>



<div class="container-fluid  ">
    <div class="col-12 mt-4 rounded-3 shadow-sm" style="background-color: white;">
        <div class="row ">
            <h5 class="mt-3 ms-3">برند های ویژه</h5>
            <div class="col">
                <img src="images/n1.jpg" class="img-fluid">
            </div>
            <div class="col">
                <img src="images/n2.png" class="img-fluid">
            </div>
            <div class="col">
                <img src="images/n3.png" class="img-fluid">
            </div>
            <div class="col">
                <img src="images/n4.png" class="img-fluid">
            </div>
            <div class="col">
                <img src="images/n5.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>






<div class="container-fluid mt-3">
    <div class="col-12 mt-4 rounded-3 shadow-sm" style="background-color: white;">
        <div class="row">
            <h4 class="text-danger ms-3 mt-2">دیجی کالا</h4>
            <div class="row">
                <div class="col-10">
                    <p class="ms-3">تلفن پشتیبانی:
                        ۶۱۹۳۰۰۰۰ - ۰۲۱
                        |
                        ۶۲۹۹۹۹۱۱ - ۰۲۱
                        |
                        هفت روز هفته، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم.</p>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-outline-secondary">بازگشت به بالا</button>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="col-lg col-md col-sm ms-5 d-none d-lg-block  d-xl-block d-xxl-block">
                    <figure class="figure text-center ">
                        <img src="images/box.svg" class="figure-img img-fluid rounded" alt="..." width="35px" height="30px">
                        <figcaption class="figure-caption  ">تحویل اکسپرس</figcaption>
                    </figure>
                </div>
                <div class="col-lg col-md col-sm d-none d-lg-block  d-xl-block d-xxl-block">
                    <figure class="figure text-center ">
                        <img src="images/credit-card-2-front.svg" class="figure-img img-fluid rounded" alt="..." width="35px" height="30px">
                        <figcaption class="figure-caption ">پرداخت در محل</figcaption>
                    </figure>
                </div>
                <div class="col-lg col-md col-sm d-none d-lg-block  d-xl-block d-xxl-block">
                    <figure class="figure text-center">
                        <img src="images/headset.svg" class="figure-img img-fluid rounded" alt="..." width="35px" height="30px">
                        <figcaption class="figure-caption ">7 روز هفته</figcaption>
                    </figure>
                </div>
                <div class="col-lg col-md col-sm d-none d-lg-block  d-xl-block d-xxl-block">
                    <figure class="figure text-center">
                        <img src="images/mailbox.svg " class="figure-img img-fluid rounded" alt="..." width="35px" height="30px">
                        <figcaption class="figure-caption "> بازگشت کالا</figcaption>
                    </figure>
                </div>
                <div class="col-lg col-md col-sm d-none d-lg-block  d-xl-block d-xxl-block">
                    <figure class="figure text-center">
                        <img src="images/bag-check.svg" class="figure-img img-fluid rounded" alt="..." width="35px" height="30px">
                        <figcaption class="figure-caption "> اصل بودن کالا</figcaption>
                    </figure>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg col-md col-sm-12">
                    <div class="card" style="width: 18rem; border: none;">
                        <div class="card-body">
                            <h5 class="card-title">با دیجی کالا</h5>

                            <p class="card-text">اتاق خبر دیجی کالا</p>
                            <p class="card-text">فروش در دیجی کالا</p>
                            <p class="card-text">فرصت های شغلی</p>
                            <p class="card-text">تماس با دیجی کالا</p>
                            <p class="card-text">درباره دیجی کالا</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg col-md col-sm-12">
                    <div class="card" style="width: 18rem; border: none;">
                        <div class="card-body">
                            <h5 class="card-title">خدمات مشتریان</h5>

                            <p class="card-text">پاسخ به پرسش های متداول</p>
                            <p class="card-text">رویه های باز گردانداندن کالا</p>
                            <p class="card-text">شرایط استفاده</p>
                            <p class="card-text">حریم خصوصی</p>
                            <p class="card-text">گزارش باگ</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md col-sm-12">
                    <div class="card" style="width: 18rem; border: none;">
                        <div class="card-body">
                            <h5 class="card-title">راهنمای خرید از دیجی کالا</h5>

                            <p class="card-text">نحوه ثبت سفارش</p>
                            <p class="card-text">رویه ارسال سفارش</p>
                            <p class="card-text">شیوه های پرداخت</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md col-sm-12 mt-3">
                    <h5>با ما همراه باشید</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="gray" class="bi bi-telegram" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="gray" class="bi bi-instagram ms-4" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>


                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="gray" class="bi bi-twitter ms-4" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="gray" class="bi bi-linkedin ms-4" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    <div class="row mt-5">
                        <h5>از جدیدترین تخفیف ها با خبر شوید</h5>

                        <div class="mb-3 mt-4">

                            <input type="email" class="form-control bg-light" id="exampleFormControlInput1" placeholder="آدرس ایمیل خود را وارد کنید">
                            <button type="submit" class="btn btn-danger mt-2">ثبت</button>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row justify-content-end">
                <div class="row bg-primary " style="border-radius: 7px;">
                    <div class="col-lg col-md col-sm-12  ">

                        <h6 class="text-light mt-4">دانلود اپلیکیشن دیجی کالا</h6>

                    </div>

                    <div class="col-lg col-md col-sm-12 p-4 ">
                        <img src="images/v1.svg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg col-md col-sm-12 p-4">
                        <img src="images/v2.svg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg col-md col-sm-12 p-4">
                        <img src="images/v3.png" class="img-fluid" alt="..." width="135px" height="78px">
                    </div>
                    <div class="col-lg col-md col-sm-12 p-4">
                        <img src="images/v4.svg" class="img-fluid" alt="...">
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-9">
                    <h5 class="ms-3">فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</h5>
                    <p class="text-start ms-3" style="font-size: 13px;">دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی
                        با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، ۷ روز ضمانت بازگشت کالا و تضمین
                        اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل
                        شود. به محض ورود به سایت دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به
                        ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.</p>
                </div>
                <div class="col-1 d-none d-lg-block  d-xl-block d-xxl-block">
                    <img src="images/m1.png" class="img-fluid" alt="...">
                </div>
                <div class="col-1 d-none d-lg-block  d-xl-block d-xxl-block">
                    <img src="images/m2.png" class="img-fluid" alt="...">
                </div>
                <div class="col-1 d-none d-lg-block  d-xl-block d-xxl-block">
                    <img src="images/m3.png" class="img-fluid" alt="...">
                </div>

            </div>
            <div class="row justify-content-end">
                <div class="row mt-5 " style="background-color: white;">
                    <div class="col-12">
                        <p class="text-center">استفاده از مطالب فروشگاه دیجی کالا فقط برای مقاصد غیر تجاری و با ذکر منبع بلا
                            مانع است. </p>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
</div>




@include('.../footer')