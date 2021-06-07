@extends('layout')
@section('title','Регистрация')

@section('content')

        <h2 class="text-center mt-4">Регис<span>трация</span></h2>
        <div class="d-flex bg-primary p-2 justify-content-center">
            <form action="/registration" method="post">
            @csrf
                <label class="form-label text-light" for="email">E-mail</label>
                <input class="form-control" type="email" name="email" required>

                <label class="form-label mt-2 text-light" for="phone">телефон</label>
                <input class="form-control" type="tel" name="phone" required>

                <label class="form-label mt-2 text-light" for="password">пароль</label>
                <input class="form-control" type="password" name="password" required>

                <label class="form-label mt-2 text-light" for="password" >Подтверждение пароля</label>
                <input class="form-control" type="password" name="confirm_password" required>

                <label class="form-label mt-3 text-light" for="check" >Подтверждение на обработку персональных данных
                <input class="check-input mx-2"  checked type="checkbox" value="1" name="check" required></label>

               <div class="d-flex justify-content-center my-3">
                   <input class="btn btn-warning" value="Зарегестрироваться"  type="submit">
               </div>

            </form>
        </div>

@endsection
