@extends('layout')

@section('title','Главная')

@section('content')
    <div class="container">
        <h2 class="text-center my-3 mx-2">Новые <span>товары</span></h2>
        <div class="row col-lg-12 flex-wrap">
            @foreach($new_products as $product)
                @include('components.product-card', $product)

            @endforeach
        </div>
    </div>
    </div>
@endsection
