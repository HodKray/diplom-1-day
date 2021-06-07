@extends('layout')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-2 my-5">
            <div class="btn-group-vertical my-4">
                <a class="btn btn-outline-primary " href="/admin/products">Все товары</a>
                <a class="btn btn-outline-primary" href="/admin/products/create">Добавление товара</a>
                <a class="btn btn-outline-primary" href="/admin/categories">Все категории</a>
                <a class="btn btn-outline-primary" href="/admin/categories/create">Добавление категории</a>
                <a class="btn btn-outline-primary" href="/admin/orders">Все заказы</a>
            </div>

        </div>
        <div class="col-lg-9">
            @yield('content_table')
        </div>
    </div>
</div>



@endsection
