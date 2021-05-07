@extends('layout')
@section('title','Авторизация')

@section('content')
    <div class="container">
        <div class="d-flex">
            <form action="/login" method="post">
                <label for="email"></label>
            </form>
        </div>
    </div>
@endsection
