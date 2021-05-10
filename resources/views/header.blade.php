<?php
$categories = \App\Models\Category::all();
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light col-lg-12 p-0">
        <div class="container">
            <button class="navbar-toggler " type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex col-lg-8">
                <a class="navbar-brand fw-bold d-flex align-items-center pb-2" href="/">Сладкарница</a>
                <a class="navbar-nav" href="/">Главная</a>
                <a class="navbar-nav" id="catalog-menu-btn"><i class="bi bi-list"></i> Каталог</a>
                <a class="navbar-nav" href="/">Контакты</a>

            </div>


            <form class="col-lg-3 form-inline d-flex   my-lg-2 ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mx-lg-2" type="submit">Найти</button>
            </form>
            @if(Auth::check())
                @if(Auth::user())
                    <a class="navbar-nav " href="/profile"><i class=" bi bi-person-circle"></i></a>
                @endif
                    <a class="navbar-nav" href="/logout">Выход</a>
            @else
            <a class="navbar-nav " href="/login"><i class=" bi bi-person-circle"></i></a>

            @endif

        </div>
    </nav>
    <div class="container">
        <div class="position-relative">
            <div class="catalog-menu p-5" style="display: none">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-2">
                            <a href="{{route('category', $product->category->id)}}">
                                <img src="{{asset('/images/categories/'.$category->photo)}}" alt="">
                                {{$category->name}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>

