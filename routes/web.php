<?php

use App\Models\Recipie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecipiesController;
use App\Models\Category;

// Home route 
Route::get('/',[DashboardController::class,'index'])
->name('home');
Route::get('/{category}',[DashboardController::class,'show'])->name('category-wise');
Route::prefix("home")->group(function () {
Route::get('/contact',[DashboardController::class,'contact'])->name('contact');
});
Route::prefix('home/user/actions')->group(function () {
Route::get('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
});
Route::prefix('/myrecipies/view')->group(function () {
//route to get all recipies
Route::get('/recipies',[RecipiesController::class,'index'])->name('recipies');
//route to show single recipie detail
Route::get('/recipies/{recipie}',function(Recipie $recipie){
            return view('recipie.single',[
                'recipie'=>$recipie
                        ]);
})->name('show');
// route to show add-recipie form
Route::get('/add-recipie',[RecipiesController::class,'create'])
->name('create')
->middleware('auth');
// route to store a recipie to database
Route::post('/recipies',[RecipiesController::class,'store'])->name('store');
});

