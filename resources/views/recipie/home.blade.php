@extends('layouts.app')

@section('content')
<!-- Image and text -->
        <div class="relative w-full">
            <img src="/img/image1.jpg" alt="" class="h-auto w-full">
                <span class="text-8xl text-white top-[35%] left-[20%] absolute font-extrabold">Lets</span>
                <h1 class="text-8xl text-white absolute top-[47%] left-[28%] font-extrabold" >Enjoy our </h1>
                <span class="text-white text-8xl top-[60%] left-[35%] absolute font-extrabold">Delicius Recipies</span>
        </div>
        <!-- Category section -->
                <p class="text-center text-orange-600 font-light text-xl mt-4">Choose a Category</p>
                <h1 class="text-6xl font-extrabold text-center my-2 text-gray-700">Our Categories</h1>
        <div class="flex justify-between items-center h-32 w-[90%] mx-auto my-10">
            @foreach($categories as $category)
        <a href="/{{$category->CategoryName}}"> 
            <div class="flex items-center flex-col">
                <img src="{{asset('storage/'.$category->image)}}" alt="" class="p-2 hover:scale-110 transition-all duration-500 ease-in-out">
                <h1 class="text-xl font-semibold py-2">{{$category->CategoryName}}</h1>
        </div>
        </a>
        @endforeach
        </div>
        <!-- Recipies section -->
        
            <p class="text-center text-orange-600 font-light text-xl mt-4">Our Papular Recipies</p>
            <h1 class="text-6xl font-extrabold text-center my-2 text-gray-700">Recipies</h1>
        <div class="grid grid-cols-3 gap-4  w-[90%] mx-auto mt-6">
            @foreach($recipies as $recipie)
            @if($loop->index < 6)
            <div class="shadow-md overflow-hidden flex flex-col h-[550px] my-6 mx-3 items-center justify-center border-0 border-gray-100">
                <img src="{{asset('storage/'.$recipie->picture)}}" alt="" class="w-full h-[45%] rounded-t-md">
                <h1 class="text-xl font-bold my-5 px-8 truncate">{{$recipie->name}}</h1>
                @include('partials._ratings')
                <p class="text-sm  my-5 px-8 leading-6">A simple and easy to made recipie with minimal ingrediants and refreshing and good pricing. </p>
                <p class="px-8 text-sm ">By Masood Malik</p>
                <div class="w-full flex justify-between items-center mt-6 h-10" >
                    <p  class="border-t border-gray-300 p-2 w-[50%] border-r text-center text-gray-600 text-sm font-mono">
                        <i class="fa-solid fa-layer-group text-lime-400"></i>
                         {{$recipie->category}}</p>
                    <a href="/myrecipies/view/recipies/{{$recipie['id']}}" class="border-t border-gray-300 p-2 w-[50%] text-center  text-gray-600 text-sm font-mono">
                        <i class="fa-solid fa-eye text-lime-400"></i> 
                        view</a>
                </div>
            </div>
            @endif
            @endforeach 
        </div>
        <div class="w-full flex items-center justify-center my-6">
                <a href="{{route('recipies')}}" 
                class="bg-lime-600 text-white text-center rounded-md w-40 h-10 px-4 py-2">
                View All Recipies</a>
        </div>
    </div>
</div> 
@endsection 
