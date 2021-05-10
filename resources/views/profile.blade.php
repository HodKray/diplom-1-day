@extends('layout')

@section('title','Личный кабинет')

@section('content')

    <h2 class="position-relative text-center my-3">Личный <span>кабинет</span></h2>


    <p class="text-center">{{Auth::user()->email}}</p>
    <div class="d-flex justify-content-center row">
    @if(Auth::user()->admin)
        <a class="text-center text-decoration-none" href="/admin">Админ панель</a>
    @endif



@endsection
