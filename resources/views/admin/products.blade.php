@extends('admintemplate')
@section('content')

<h5 class="mt-3 ms-5">همه محصولات</h5>
<a class="btn btn-success mt-5" href="{{url('/admin/products/add')}}">افزودن کالای جدید</a>
<div class="col-12 mt-4 " style="background-color: white;">

    <div class="row ">

        <table class="table" style="font-size: 12px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">قیمت با تخفیف</th>
                    <th scope="col">دسته بندی</th>
                    <th scope="col">موجودی</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>

                    <th scope="row">{{$product->id}}</th>
                    <td> <img src="/{{$product->images->first()->url}}" class="card-img-top" alt="..." width="40px" height="40px"></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price_off}}</td>
                    <td>{{$product->category->title}}</td>
                    <td>{{$product->count}}</td>
                    <td> <a href="products/edit/{{$product->id}}" class="btn btn-sm btn-info mt-3"><i class="bi bi-pencil-square"></i></a>
                        <a href="products/delete/{{$product->id}}" class="btn btn-sm btn-danger mt-3"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>






        

    </div>
</div>

@endsection