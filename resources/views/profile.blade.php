@extends('layout')

@section('title','Личный кабинет')

@section('content')

    <h2 class="position-relative text-center my-3">Личный <span>кабинет</span></h2>

    <p class="text-center">{{Auth::user()->email}}</p>

    @if(Auth::user()->admin)

        <div class="d-flex  justify-content-center ">
            <a class="btn btn-primary  text-center text-decoration-none col-lg-2" href="/admin/products">Админ
                панель</a>
        </div>
    @endif
    <h2 class="mt-5 text-center my-3">Мои <span>заказы</span></h2>
    <div class="container mt-4">


            @if(Auth::check() && Auth::user())

                @foreach($orders as $order)

                <div class="container">
                <div class="row ">
                    <p class="text-center"> Заказ № {{$order->id}}</p>
                    <p class="text-center">Список товаров</p>

                    @foreach($order->products as $product)
                                <div class="col-lg-4 flex-wrap">
                            <div class="d-flex justify-content-center">
                                <img  src="{{asset('/images/products/'.$product->photo)}}" height=150" width="150">
                            </div>
                        <p class="text-center">{{$product->title}}</p>
                        <p class="" style="font-size:13px;">
                            {{$product->description}}</p>
                            </div>

                    @endforeach

                </div>
                    </div>

                @endforeach

            @endif

            <div class="d-flex justify-content-center mt-4"> {{$orders->links()}}</div>
            </div>

    </div>
@endsection
