@extends('layout')
@section('title','Авторизация')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Авто<span>ризация</span></h2>
        <div class="d-flex justify-content-center mt-4">
            <form action="/login" method="post">
                @csrf
                <label class="form-label" for="email">email</label>
                <input class="form-control" type="email" name="email">

                <label class="form-label" for="password">password</label>
                <input class="form-control" type="password" name="password">

                <div class="d-flex justify-content-center my-3">

                    <input class="btn btn-warning" value="Войти" type="submit" >
                </div>
                <a class="mt-3" href="/registration">Вы ещё не зарегестрированны?</a>

            </form>
        </div>
    </div>
@endsection
