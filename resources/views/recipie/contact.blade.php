@extends('layouts.app')

@section('content')
<div
    class="w-full relative h-72 bg-[url('/public/img/contact1.jpg')] bg-cover bg-center"
>
    <h1
        class="text-center text-6xl font-extrabold my-3 absolute top-24 left-24 text-white">
        Contact Us
    </h1>
</div>
<div class="w-full h-72 mt-4 text-xl text-white grid grid-cols-3 gap-2 px-10 justify-items-center items-center">
   <div class=" bg-neutral-600 h-[80%] w-full flex items-center justify-center ">
    <h2>
    <i class="fa-solid fa-location-dot text-orange-600"></i>
        Street 5,Iqbal Raod Rawalpindi</h2>
   </div>
   <div class=" bg-neutral-600 h-[80%] w-full flex items-center justify-center">
        <h2 class="">
        <i class="fa-solid fa-envelope text-orange-600"></i>
        xyz@gmail.com
    </h2>
   </div>
   <div class=" bg-neutral-600 h-[80%] w-full flex items-center justify-center">
    <h2 class=""><i class="fa-solid fa-phone text-orange-600"></i>
    +9231315512536
    </h2>
   </div>
    
    
    

</div>
@endsection
