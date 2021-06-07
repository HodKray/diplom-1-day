<?php
$categories = \App\Models\Category::all();
?>

<header>

    <nav class="navbar navbar-expand-lg navbar-light  p-0">
        <div class="container ">

            <button class="navbar-toggler " type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <a class="navbar-brand mt-2 pb-2" href="/">
                <img src="/images/logo.png" height="50" width="50" alt="логотип">Сладкие мечты
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <a class="navbar-nav mt-1" href="/">Главная</a>
                <a class="navbar-nav mt-1 " id="catalog-menu-btn">Каталог<i class="bi bi-list mx-2"></i></a>
                <a class="navbar-nav mt-1" href="/about">Контакты</a>
                <a class="navbar-nav mt-1 " href="/cart" id="catalog-menu-btn">Корзина
                    <img src="/images/cart.svg" height="30" width="30"></a>
                <div class="col-lg-4">
                </div>
                @if(Auth::check())
                    @if(Auth::user())

                            <a class="navbar-nav col-lg-3" href="/profile"><i class=" bi bi-person-circle"></i></a>
                            @endif

                            <a class="navbar-nav" href="/logout">Выход</a>

                            @else
                                <a class="navbar-nav" href="/login"><i class=" bi bi-person-circle"></i></a>

                            @endif


        </div>
        </div>

    </nav>

    <div class="container">
        <div class="position-relative">
            <div class="catalog-menu p-5" style="display: none">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-2">
                            <a href="{{route('category', $category->id)}}">
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

