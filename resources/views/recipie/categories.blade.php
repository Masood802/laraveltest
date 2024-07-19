@extends('layouts.app')

@section('content')
    <div class="w-full h-72 bg-[url('/public/img/bg5.jpg')] bg-left bg-cover relative">
        <h1 class="text-6xl font-extrabold text-center pt-16 ">Recipies</h1>
        <h2 class="text-4xl font-extrabold text-center pt-4">{{$list}}</h2>
    
    </div>
        <div class="grid grid-cols-3 gap-4 w-[90%] mx-auto mt-8">
        @foreach($filteredlists as $recipie)
        <div
            class="shadow-md overflow-hidden flex flex-col h-[550px] my-6 mx-3 items-center justify-center border-0 border-gray-100"
        >
            <img
                src="{{asset('storage/'.$recipie->picture)}}"
                alt=""
                class="w-full h-[45%] rounded-t-md"
            />
            <h1 class="text-xl font-bold my-5 px-8 truncate">
                {{$recipie->name}}
            </h1>
            @include('partials._ratings')
            <p class="text-sm my-5 px-8 leading-6">
                A simple and easy to made recipie with minimal ingrediants and
                refreshing and good pricing.
            </p>
            <p class="px-8 text-sm">By Masood Malik</p>
            <div class="w-full flex justify-between items-center mt-6 h-10">
                <a
                    href=""
                    class="border-t border-gray-300 p-2 w-[50%] border-r text-center text-gray-600 text-sm font-mono"
                >
                    <i class="fa-solid fa-layer-group text-lime-400"></i>
                    {{$recipie->category}}</a
                >
                <a
                    href=""
                    class="border-t border-gray-300 p-2 w-[50%] text-center text-gray-600 text-sm font-mono"
                >
                    <i class="fa-solid fa-eye text-lime-400"></i>
                    view</a
                >
            </div>
        </div>
        @endforeach
    </div>
    @if(count($filteredlists)>0)
    <div> <h1>No Recipies in {{$list}} categoy</h1></div>
    @endif
<a href="{{ url()->previous() }}" class="flex items-center justify-center bg-orange-500 w-44 mx-auto py-2 text-white rounded-md">Back</a>
@endsection