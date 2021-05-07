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
                    <input class="btn btn-success" type="submit" >
                </div>
            </form>
        </div>
    </div>
@endsection
