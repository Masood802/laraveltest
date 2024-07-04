@extends('layouts.app')

@section('content')
    <h1 class="text-center text-2xl font-bold my-3">Our Recipies</h1>
    <div class="flex w-[90%] mx-auto flex-wrap">
    @foreach ($recipies as $recipie)
            <div class="flex  flex-col w-[30%] h-[380px] bg-white shadow-md mx-4 rounded-t-md my-2">
                    <div class="overflow-hidden rounded-t-md w-full h-[55%]">
                        <img src="{{asset('storage/'.$recipie->picture)}}" alt="" class="w-full scale-100 hover:scale-105 transition-all duration-600 ease-linear">
                    </div>
                <h2 class="text-2xl font-bold text-center my-4">{{$recipie->name}}</h2>
                <a href="/recipies/{{$recipie->id}}" class="bg-blue-500 w-44 px-5 py-2 text-center mx-auto rounded-sm text-white text-sm font-semibold">
                    View Details</a>
            </div>
    @endforeach
    </div>
    <div class="w-full flex px-5 py-2 mx-auto my-4 justify-center items-center">
        <a href="{{route('create')}}" 
        class="bg-pink-600 text-white font-semibold text-sm w-72 px-5 py-2 text-center"
        >Add New Recipie</a>
    </div>
@endsection