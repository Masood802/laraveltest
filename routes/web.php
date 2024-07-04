<?php

use App\Models\Recipie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecipiesController;


Route::get('/dashboard',[DashboardController::class,'index'])
->name('dashboard')
->middleware('auth');



Route::get('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/recipies',[RecipiesController::class,'index'])->name('recipies');
Route::get('/recipies/{id}',function($id){
            return view('recipie.single',[
                'recipie'=>Recipie::find($id)
            ]);
})->name('show');

Route::get('/createnew',[RecipiesController::class,'create'])->name('create');
Route::post('/recipies',[RecipiesController::class,'store'])->name('store');


Route::get('/',function(){
    return view('recipie.home');
})->name('home');

