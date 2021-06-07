@extends('layout')

@section('title', $product->title)

@php
    $title_mid = strrpos(substr($product->title, 0, floor(strlen($product->title)/2)), ' ')+1;
    $title_1 = substr($product->title, 0, $title_mid);
    $title_2 = substr($product->title, $title_mid);
@endphp

@section('content')
    <div class="container">

        @if($title_mid > 1)
            <h1 class="text-center my-5">{{$title_1}} <span>{{$title_2}}</span></h1>
        @else
            <h1 class="text-center my-5">{{$product->title}}</h1>
        @endif

        <div class="product_main row">
            <div class="col-6">
                <img class="product_main_photo" src="{{asset('/images/products/'.$product->photo)}}" alt="">
            </div>
            <div class="col-6 p-3">
                <p class="product_main_title">{{$product->title}}</p>
                <div class="d-flex justify-content-end align-items-center mx-3  my-2">
                    <p class="product_main_price  my-0">{{number_format($product->price)}} ₽</p>
                    <a href="/add-cart/{{$product->id}}" class="btn btn-warning mx-3">
                        Добавить в корзину
                    </a>
                </div>
                <p class="product_main_description"><b>Описание: </b>{{$product->description}}</p>

            </div>
        </div>
    </div>
@endsection
