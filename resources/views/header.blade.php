<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">

        <a class="mx-3 " href="/">
            <img class=" rounded-circle" src="/img/logo.png" width="80" height="80"> </a>
        <button class="navbar-toggler  mx-4 border border-2 border-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="justify-content-center collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav  col-lg-8  col-sm-8">
                @if(Auth::check())
                    <li>
                        <a class="nav-link text-light" href="/">Главная</a>
                    </li>

                    <li class="col-lg-7">
                        <a class="nav-link text-light" href="/About">О нас</a>
                    </li>
                    <li>
                        <div class="dropdown show nav-link">
                            <a class=" dropdown-toggle text-light text-decoration-none" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->login}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/profile">Личный кабинет</a>
                                @if(Auth::user()->admin)
                                    <a class="dropdown-item" href="/tours">Админ панель</a>
                                @endif
                                <a class="dropdown-item" href="/logout">Выход</a>
                            </div>
                        </div>
                    </li>
                @else
                    <li>
                        <a class="nav-link text-light" href="/registration">Регистрация</a>
                    </li>
                    <li>
                        <a class="nav-link text-light" href="/login">Авторизация</a>
                    </li>
                @endif
            </ul>
            <form class="form-inline mx-3 mt-3">
                <div class="d-flex justify-content-start">
                    <input class="form-control mx-3 " type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-primary mr-3 ml-sm-2  my-sm-0" type="submit">Поиск</button>
                </div>
            </form>

        </div>

    </nav>
</header>
