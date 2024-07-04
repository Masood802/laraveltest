<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Recipies</title>
</head>
<body class="bg-gray-300">
    <nav class="bg-slate-100 w-full h-20 text-semibold flex justify-between">
        <ul class="flex font-semibold items-center">
            <li class="p-3"><a href="{{route('home')}}">Home</a></li>
            <li class="p-3"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="p-3"><a href="{{route('recipies')}}">Recipies</a></li>
        </ul>
        <ul class="flex font-semibold items-center">
            @auth
            <li class="p-3"><a href="">Welcome,{{ auth()->user()->name}}</a></li>
            <li class="p-3"><a href="{{route('logout')}}">logout</a></li>
            @endauth
            @guest
            <li class="p-3"><a href="{{route('register')}}">Register</a></li>
            <li class="p-3"><a href="{{route('login')}}">Login</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
