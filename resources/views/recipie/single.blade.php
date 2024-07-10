@extends('layouts.app')

@section('content')
<h1 class="text-center text-6xl my-3 font-extrabold border-t border-gray-200 py-1">{{$recipie->name}}</h1>
 <div class="flex items-center justify-center text-2xl flex-col">
    <h2 class="text-xl font-light text-lime-500 ">{{$recipie->category}}</h2>
    @include('partials._ratings')
 </div> 
    <div class="w-[70%] mx-auto flex item-center justify-center h-[500px] overflow-hidden rounded-lg shadow-md">
    <img src="{{asset('storage/'.$recipie->picture)}}" alt="" class="w-full hover:scale-105 transition-all duration-500 ease-in-out">
    </div>
    <div class="bg-slate-50 flex items-center justify-center flex-col">
      <h1 class="text-2xl font-mono text-center py-4 ">Main Ingredients</h1>
      <p class="text-center border-2 border-gray-100 w-[70%] mx-auto py-8">{{$recipie->ingredients}}</p>         
        <h2 class="text-2xl font-mono text-center py-4">Instructions</h2>
        <p class="text-center border-2 border-gray-100 w-[70%] mx-auto py-4">
           {{$recipie->instruction}}
        </p>
        <a href="{{$recipie->link}}" target="_blank" 
            class="bg-orange-600 px-16 py-3 text-white rounded-sm mx-auto my-4"><i class="fa-brands fa-youtube"></i> Watch</a>
    </div>
</div>
@endsection
