<!doctype html>
<html lang="ru">
<head>
{{--метатэги--}}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- подключение стилей и скриптов--}}
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="{{asset('/vendor/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/catalog-menu.js')}}"></script>
{{--название--}}
    <title>@yield('title')</title>
</head>
<body>
@include('header')
@yield('content')
@include('footer')
</body>
</html>
