@extends('layout')

@section('title', $product->title)

@section('content')
    <div class="container">
        <h1 class="text-center my-5">{{$product->title}}</h1>
        <div class="product_main row">
            <div class="col-6">
                <img class="product_main_photo" src="{{asset('/images/products/'.$product->photo)}}" alt="">
            </div>
            <div class="col-6 p-3">
                <p class="product_main_title">{{$product->title}}</p>
                <div class="d-flex justify-content-end align-items-center mx-3  my-2">
                    <p class="product_main_price  my-0">{{number_format($product->price)}} ₽</p>
                    <button class="btn btn-warning mx-3">
                        Добавить в корзину
                    </button>
                </div>
                <p class="product_main_description"><b>Описание: </b>{{$product->description}}</p>

            </div>
        </div>
    </div>
@endsection
