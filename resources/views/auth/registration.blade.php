@extends('layout')
@section('title','Регистрация')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <form action="/registration" method="post">
            @csrf
                <label class="form-label" for="email">email</label>
                <input class="form-control" type="email" name="email">

                <label class="form-label" for="phone">phone</label>
                <input class="form-control" type="tel" name="phone">

                <label class="form-label" for="password">password</label>
                <input class="form-control" type="password" name="password">

               <div class="d-flex justify-content-center my-3">
                   <input class="btn btn-warning" value="Зарегестрироваться" type="submit" >
               </div>
            </form>
        </div>
    </div>
@endsection
