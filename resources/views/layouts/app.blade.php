<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite('resources/css/app.css')
        <title>Recipies</title>
        <link
            rel="stylesheet"
            href="{{
                asset(
                    '/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.min.css'
                )
            }}"
        />
    </head>
    <body>
        <nav class="bg-gray-100 w-full h-12 text-semibold flex justify-between">
            <ul
                class="flex font-semibold items-center w-[30%] ml-20 text-gray-600"
            >
                <li
                    class="p-3 text-2xl hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                </li>
                <li
                    class="p-3 text-2xl hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                </li>
                <li
                    class="p-3 text-2xl hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li
                    class="p-3 text-2xl hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
            <ul class="flex font-semibold items-center mr-20 text-gray-600">
                @auth
                <li
                    class="p-3 hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="">Welcome,{{ auth()->user()->name}}</a>
                </li>
                <li
                    class="p-3 hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="{{ route('logout') }}">logout</a>
                </li>
                @endauth @guest
                <li
                    class="p-3 hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="{{ route('register') }}">Register</a>
                </li>
                <li
                    class="p-3 hover:text-orange-600 transition-all duration-400 ease-in"
                >
                    <a href="{{ route('login') }}">Login</a>
                </li>
                @endguest
            </ul>
        </nav>
        <a href="/">
            <div class="h-24 shadow-sm mb-4 flex items-center justify-center">
                <div class="flex items-center">
                    <img src="img/cooking.png" alt="" class="w-14 mr-1" />
                    <div>
                        <h1 class="text-xl font-bold font-serif -mb-1">
                            Masood's Recipies
                        </h1>
                        <p class="text-[14px] font-semibold">
                            A Home of Delicius Recipies
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <div class="h-16 flex justify-center items-center">
            <a
                href="/"
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Home</a
            >
            <a
                href=""
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Recipies</a
            >
            <a
                href=""
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Add Recipies</a
            >
            <a
                href=""
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Contact</a
            >
        </div>
        @yield('content')
    </body>
</html>
