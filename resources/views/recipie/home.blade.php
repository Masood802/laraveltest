@extends('layouts.app')

@section('content')
<!-- Image and text -->
        <div class="relative w-full">
            <img src="/img/image1.jpg" alt="" class="h-auto w-full">
                <span class="text-7xl text-white top-[40%] left-[20%] absolute font-extrabold">Lets</span>
                <h1 class="text-7xl text-white absolute top-[50%] left-[28%] font-extrabold" >Enjoy our </h1>
                <span class="text-white text-7xl top-[60%] left-[35%] absolute font-extrabold">Delicius Recipies</span>
        </div>
        <!-- Category section -->
                <p class="text-center text-orange-600 font-light text-xl mt-4">Choose a Category</p>
                <h1 class="text-6xl font-bold text-center my-2 text-gray-700">Our Categories</h1>
        <div class="flex justify-between items-center h-32 w-[90%] mx-auto my-10">
            @foreach($categories as $category)
        <div class="flex items-center flex-col">
                <a href="{{route('recipies')}}"> 
                    <img src="{{asset('storage/'.$category->image)}}" alt="" class="p-2 hover:scale-110 transition-all duration-500 ease-in-out"></a>
                <h1 class="text-xl font-semibold py-2">{{$category->CategoryName}}</h1>
        </div>
        @endforeach
        </div>
        <!-- Recipies section -->
        
            <p class="text-center text-orange-600 font-light text-xl mt-4">Our Papular Recipies</p>
            <h1 class="text-6xl font-bold text-center my-2 text-gray-700">Recipies</h1>
        <div class="flex justify-between items-center w-[90%] mx-auto mt-6">
            <div class="shadow-md overflow-hidden w-[30%] flex flex-col h-[450px] my-6">
                <img src="img/recipie.jpg" alt="" class="w-full h-[60%] rounded-t-md">
                <h1 class="text-2xl font-bold my-3 px-8">Title</h1>
                @include('partials._ratings')
                <p class="text-sm  my-3 px-8 leading-6">A simple and easy to made recipie with minimal ingrediants and refreshing and good pricing. </p>
                

            </div>
        </div>
        
    </div>
    
</div>    

@endsection 
