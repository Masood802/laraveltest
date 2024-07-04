@extends('layouts.app')

@section('content')
<div class="w-full bg-[url('/public/img/bg1.jpg')] bg-cover bg-center h-screen flex justify-center items-center" >
    <div class="flex items-center justify-center flex-col">
        <h1 class="text-center text-3xl uppercase text-blue-400 mb-3">
            welcome to our recipies </h1>
        <p class="text-center mb-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Similique doloribus cupiditate 
            blanditiis omnis hic iure nulla quidem numquam expedita reprehenderit!
        </p>
        <form action="{{route('dashboard')}}" method="GET">
            <button type="submit" name="submit" class="bg-blue-700 left-[60%] w-48 py-2 rounded text-slate-50">Explore More</button>
        </form>
        
    </div>
    
</div>    

@endsection 
