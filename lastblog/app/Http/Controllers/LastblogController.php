<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Lastblog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LastblogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function create(){
      $categories = Categories::all();
      return view('blog.create',compact('categories'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'title'=>'required|string|min:5',
            'category'=>'required|integer|exists:categories,id',
            'content'=>'required|string|min:10'
        ]);
        $validate['user_id']=Auth::id();
        Lastblog::create($validate);
        return  redirect()->route('index')->with('message','blog posted successfully');
    }
}
