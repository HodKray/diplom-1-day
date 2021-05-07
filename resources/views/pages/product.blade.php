@extends('layout')

@section('title', $product->title)

@section('content')
    <div class="container">
        <h1 class="text-center">{{$product->title}}</h1>

    </div>
@endsection
