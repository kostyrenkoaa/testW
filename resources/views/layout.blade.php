<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Главная страница')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>
    <ul class="main-menu">
        <li><a href="{{route('home')}}">Домашняя страница</a></li>
        <li><a href="{{route('loop')}}">Тестовое задание 1</a></li>
        <li><a href="{{route('extra_task')}}">Тестовое задание 2</a></li>
    </ul>
    @yield('content')
</body>
</html>
