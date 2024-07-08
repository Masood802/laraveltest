<?php

namespace App\Http\Controllers;

use App\Models\Recipie;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('recipie.home',[
            'categories'=>Category::all()
        ]);
    }
}
