@extends('layout')

@section('content')
    <div class="container my-4">
        <div class="cols col-lg-6 ">
            <div class="btn-group-vertical ">
                <a class="btn btn-outline-danger" href="/">Добавление товара</a>
                <a class="btn btn-outline-danger" href="/">Добавление товара</a>
                <a class="btn btn-outline-danger" href="/">Добавление товара</a>
                <a class="btn btn-outline-danger" href="/">Добавление товара</a>
            </div>
        </div>
    </div>
    @yield('content_table')
@endsection
