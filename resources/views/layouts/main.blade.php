<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('mycss/main.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('mycss/login.css')}}">
</head>
<body>
    {{-- @include('layouts/navbar1') --}}
    @yield('content')
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('myjs/login.js')}}"></script>
</body>
</html>