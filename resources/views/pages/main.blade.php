@extends('layout')

@section('title','Главная')

@section('content')
    <div class="container">
        <h2 class="text-center">Новые <span>товары</span></h2>
        <div class="row">
            @foreach($new_products as $product)
                <div class="col-3">
                    @include('components.product-card', $product)
                </div>
            @endforeach
        </div>
    </div>
@endsection
