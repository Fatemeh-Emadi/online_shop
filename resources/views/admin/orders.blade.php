@extends('admintemplate')
@section('content')

<h5 class="mt-3 ms-5">همه سفارشات</h5>
<div class="col-12 mt-4 " style="background-color: white;">

    <div class="row ">

        <table class="table" style="font-size: 12px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام کاربری</th>
                    <th scope="col">نام محصول</th>
                    <th scope="col">تعداد سفارش</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>

                    <th scope="row">{{$order->id}}</th>
                  
                    <td>{{$order->user->username}}</td>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->count}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>






        

    </div>
</div>

@endsection