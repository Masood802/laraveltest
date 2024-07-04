@extends('layouts.app')

@section('content')
    
<h1 class="text-center text-3xl my-4">Categories</h1>
    <div class="flex justify-center items-center w-10/12 mx-auto flex-wrap">
        @foreach ($categories as $category)
        <div class="flex items-center w-[45%] flex-col bg-white shadow-md rounded-md m-3 h-[500px]">
            
                <a href="{{route('recipies')}}"> <img src="{{asset('storage/'.$category->image)}}" alt="" class="full overflow-hidden p-2"></a> 
                <h1 class="text-2xl font-semibold py-3">{{$category->CategoryName}}</h1>
                <P class="mx-2 p-2 text-center h-52 text-ellipsis overflow-hidden">{{$category->description}}</P>
            </div>   
                @endforeach
            
            
        

    </div>
@endsection