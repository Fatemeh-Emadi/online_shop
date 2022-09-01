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
</div>
<div class="container">
    <div class="row">
        <p class="text-secondary mt-3"> {{$product->name}}</p>

        <div class="col-1 mt-5">
            <div><i class="bi bi-heart" style="font-size: 25px;"></i></div>
            <div class="mt-3"><i class="bi bi-share" style="font-size: 25px;"></i></div>
            <div class="mt-3"><i class="bi bi-bell" style="font-size: 25px;"></i></div>
            <div class="mt-3"><i class="bi bi-graph-up" style="font-size: 25px;"></i></div>
            <div class="mt-3"><i class="bi bi-square-half" style="font-size: 25px;"></i></div>
            <div class="mt-3"><i class="bi bi-list-task" style="font-size: 25px;"></i></div>
        </div>

        <div class="col-5 mt-2">


            <img src="{{url($product->url)}}" class="card-img-top" alt="...">


        </div>
        <div class="col-6">
            <div class="card mt-2 ">
                <div class="card-body">
                    <h5 class="card-title">مشخصات</h5>
                    <h6 class="card-subtitle mb-2 text-muted mt-1">{{$product->description}}</h6>
                    <hr>
                    <h6>ویژگی ها</h6>

                    @foreach($product->informations as $information)
                    <p class="mt-3">{{$information->title}}: {{$information->value}}</p>
                    @endforeach


                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-secondary">قیمت فروشنده</h6>
                        </div>
                        <div class="col-6">
                            <p class="text-dark" style="margin-right: 110px;">{{$product->price_off}} تومان</p>
                            <p class="text-secondary text-decoration-line-through" style="margin-right: 110px; font-size:12px;">{{$product->price}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-secondary">موجودی در انبار</h6>
                        </div>
                        <div class="col-6">
                            <p class="text-dark" style="margin-right: 110px;">{{$product->count}} عدد</p>
                        </div>
                    </div>
                    <div>
                        <center><button class="btn btn-danger">افزودن به سبد خرید</button></center>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="row mt-5 mb-5">
        <div class="col-6">
            <h5 class="text-secondary">نظرات کاربران</h5>
            <div class="d-flex mb-3">
                 <div class="text-primary ml-2">
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star text-warning"></i>
                 </div>
                 <small class="ms-1">از مجموع 10 نظر</small>
                 <div class="d-flex mb-3" style="margin-right: 110px;">
                 <small class="ms-1">نظر شما:</small>
                 <div class="text-primary ">
                 
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(1)" onclick="add_rating(1)"></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(2)" onclick="add_rating(2)"></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(3)" onclick="add_rating(3)"></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(4)" onclick="add_rating(4)"></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(5)" onclick="add_rating(5)"></i>
                 </div>
                 
          
        </div>

          </div>
            <div id="collapse{{$product->id}}">
                <ul class="list-group" id="list-comments-{{$product->id}}">
                    @foreach($product->comments as $comment)

                    <li class="list-group-item list-group-item-action" aria-current="true">

                        <div class="d-flex w-100 justify-content-between">
                            <small>{{$comment->user->name}}</small>



                        </div>
                        <p class="mb-1 text-secondary">{{$comment->text}}</p>
                    </li>


                    @endforeach
                </ul>
            </div>
            @guest
            <div class="alert alert-danger mt-4" role="alert">
                برای ثبت نظر حتما باید وارد حساب کاربری خود شوید
            </div>
            @endguest
            @auth
            <div class="mb-3 mt-5">
                <form method="post" id="form-comment-{{$product->id}}">
                    <label for="exampleFormControlTextarea1" class="form-label">دیدگاه شما</label>
                    <input type="text" class="form-control" placeholder="ثبت نظر..." name="text">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

            <center><button class="btn btn-outline-danger" type="button" onclick='send_comment({{$product->id}})'>ثبت دیدگاه</button></center>
            </form>
        </div>
        <div class="col-6">
        


    </div>
</div>
<script>
     var stars=document.getElementsByClassName("rating");
  
    
    function draw_rating(x)
    {
        for(var i=0; i < x; i++)
        {
            stars[i].classList.remove("bi-star");
            stars[i].classList.add("bi-star-fill");
        }
        for(var i=x; i < 5; i++)
        {
            stars[i].classList.remove("bi-star-fill");
            stars[i].classList.add("bi-star");
        }
    }
    function add_rating(x)
    {
        var json_data={
            product_id="{{$product->id}}",
            score:x
        };
        fetch("/send-rating",{
            method:"post",
            headers:{
                "Content-Type":"application/json",
                "Accept":"application/json",
                "X-Requested-With":"XMLHttpRequest",
                "X-CSRF-Token":"{{csrf_token()}}"
            },
            body:JSON.stringify(json_data)
        })
        .then(result=>{
            alert("امتیاز شما با موفقیت ثبت شد");
        });
    }

    function send_comment(product_id) {
        let form = document.getElementById("form-comment-" + product_id);
        let form_data = new FormData(form);

        fetch("{{url('/send-comment')}}", {
            method: "post",
            body: form_data
        }).then(result => result.text()).then(result => {
            console.log(result);
            if (result == 1) {


                let list_comments = document.getElementById("list-comments-" + product_id);

                let li = document.createElement("LI");
                li.classList.add("list-group-item");
                li.classList.add("list-group-item-action");

                let p = document.createElement("P");
                p.classList.add("mb-1");
                p.innerHTML = form_data.get("text");

                li.appendChild(p);
                list_comments.appendChild(li);
            }
        }).catch(error => {
            alert(error);
        });


    }

   
 
    
    
</script>
@endauth