@extends('layout')
@section('title','Регистрация')

@section('content')
    <div class="container">
        <div class="d-flex">
            <form action="/registration" method="post">
                <label for="email"></label>
            </form>
        </div>
    </div>
@endsection
