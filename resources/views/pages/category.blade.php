@extends('layout')

@section('title', $category->name)

@section('content')
    <div class="container">
        <h1 class="text-center">{{$category->name}}</h1>

    </div>
@endsection
