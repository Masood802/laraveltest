<?php

namespace App\Http\Controllers;

use App\Models\Recipie;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('recipie.home',[
            'categories'=>Category::all(),
            'recipies'=>Recipie::all()
        ]);
    }
    public function show($category){
        return view('recipie.categories',[
            'list'=>$category,
            'filteredlists'=>Recipie::whereIn('category',[$category])->get()
        ]);
    }
    public function contact(){
        return view('recipie.contact');
    }
}