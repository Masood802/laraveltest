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
                href="/recipies"
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Recipies</a
            >
            <a
                href="{{route('create')}}"
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Add Recipies</a
            >
            <a
                href="{{route('contact')}}"
                class="p-3 m-2 font-semibold hover:text-orange-600 transition-all duration-300 ease-in"
                >Contact</a
            >
        </div>
        @yield('content')
        <footer>
            <!--Footer Section -->
            <div
                class="w-full bg-[url('/public/img/bg2.jpg')] shadow-md bg-cover bg-center text-white flex justify-between items-center h-[300px] mt-6"
            >
                <div
                    class="w-[35%] border-r border-gray-50 h-full flex flex-col"
                >
                    <h1 class="text-xl text-white mt-24 ml-24 font-bold">
                        Subscribe
                    </h1>
                    <p class="text-sm ml-24 my-4 mr-6">
                        Register youself to get notified about exclusive offers
                        and new recipies
                    </p>
                    <a
                        href=""
                        class="bg-lime-600 text-white text-center rounded-sm w-40 h-8 p-1 ml-24"
                        >Register</a
                    >
                </div>
                <div class="w-[25%] h-full flex flex-col text-white">
                    <a href="" class="text-xl text-white mt-24 ml-24 font-bold"
                        >Explore</a
                    >
                    <a
                        href="{{ route('recipies') }}"
                        class="ml-24 text-base mt-4"
                        >Recipies</a
                    >
                    <a href="{{ route('create') }}" class="ml-24 text-base"
                        >Add Recipie</a
                    >
                    <a href="#" class="ml-24 text-base">latest News</a>
                    <a href="#" class="ml-24 text-base">Contact</a>
                </div>
                <div
                    class="w-[35%] border-l border-gray-50 h-full flex flex-col text-white"
                >
                    <h1 class="text-xl text-white mt-24 ml-24 font-bold">
                        Contact
                    </h1>
                    <h2 class="ml-24 text-base mt-4">
                        <i class="fa-solid fa-location-dot text-orange-600"></i>
                        Street 5,Iqbal Raod Rawalpindi
                    </h2>
                    <h2 class="ml-24 text-base">
                        <i class="fa-solid fa-envelope text-orange-600"></i>
                        xyz@gmail.com
                    </h2>
                    <h2 class="ml-24 text-base">
                        <i class="fa-solid fa-phone text-orange-600"></i>
                        +9231315512536
                    </h2>
                </div>
            </div>
            <div
                class="bg-neutral-800 w-full h-20 flex items-center justify-between"
            >
                <h3 class="text-white ml-10">
                    All rights reserved @The Appmakers
                </h3>
                <ul
                    class="flex font-semibold items-center w-[30%] ml-20 text-gray-600"
                >
                    <li
                        class="p-3 text-2xl hover:text-blue-600 transition-all duration-400 ease-in"
                    >
                        <a href="#"
                            ><i class="fa-brands fa-square-facebook"></i
                        ></a>
                    </li>
                    <li
                        class="p-3 text-2xl hover:text-blue-600 transition-all duration-400 ease-in"
                    >
                        <a href="#"
                            ><i class="fa-brands fa-square-twitter"></i
                        ></a>
                    </li>
                    <li
                        class="p-3 text-2xl hover:text-pink-600 transition-all duration-400 ease-in"
                    >
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li
                        class="p-3 text-2xl hover:text-red-700 transition-all duration-400 ease-in"
                    >
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
