<html lang="fa" >

<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.rtl.css')}}" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('style.css')}}">
    <link rel="stylesheet" href="{{ url('all.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body  dir="rtl" style="background-color: white;">
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
            @guest
          <a href="{{url('/login')}}" class="btn btn-outline-secondary ml-4 px-0">
          <span>
                <i class="fas fa-user"></i>
                ورود به حساب کاربری
                
                </span>
                </a>
                @endguest
                @auth
                <a href="{{url('/logout')}}" class="btn btn-outline-secondary ml-4 px-0">
          <span>
          
                خروج از حساب کاربری
                </span>
                </a>
                @endauth
          
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
