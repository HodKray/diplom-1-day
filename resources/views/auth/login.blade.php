@extends('layout')
@section('title','Авторизация')

@section('content')

        <h2 class="text-center mt-4">Автори<span>зация</span></h2>
        <div class="d-flex bg-primary p-3 justify-content-center mt-4">

            <form   action="/login" method="post">
                @csrf
                <label class="form-label text-light" for="email">E-mail</label>
                <input class="form-control" type="email" name="email">

                <label class="form-label text-light" for="password">пароль</label>
                <input class="form-control" type="password" name="password">

                <div class="d-flex justify-content-center my-3">

                    <input class="btn btn-warning" value="Войти" type="submit" >
                </div>
                <a class="mt-3 text-light" href="/registration">Вы ещё не зарегестрированны?</a>

            </form>
        </div>

@endsection
