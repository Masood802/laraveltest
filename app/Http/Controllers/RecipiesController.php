<?php

namespace App\Http\Controllers;

use App\Models\Recipie;
use Illuminate\Http\Request;

class RecipiesController extends Controller
{
    public function index(){
        return view('recipie.recipies',[
            'recipies'=>Recipie::latest()->simplePaginate(6)
        ]);
    }
    // public function show($id){
    //     return view('recipie.single',[
    //         'recipie'=>Recipie::find($id)
    //     ]);
    // }
    public function create(){
        return view('recipie.create');
    }
    public function store(request $request){
        $formData=$request->validate([
            'name'=>'required|max:255',
            'instruction'=>'required',
            'category'=>'required',
            'ingredients'=>'required',
            'link'=>'required'
        ]);
        if($request->hasFile('picture')){
            $formData['picture']=$request->file('picture')->store('images','public');
        }
        Recipie::create($formData);
        return redirect()->route('recipies');
    }
}
