@extends('layout')

@section('title', $category->name)

@section('content')
    <div class="container">
        <h1 class="text-center">{{$category->name}}</h1>
        <div class="row">
            @foreach($products as $product)
                @include('components.product-card', $product)
            @endforeach
        </div>
        <div class="d-flex justify-content-center my-3">{{$products->links()}}</div>
    </div>

@endsection
