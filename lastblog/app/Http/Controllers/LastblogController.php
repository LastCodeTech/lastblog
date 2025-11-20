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
         $blogs=Lastblog::all();
        return view('blog.index',compact('blogs'));
    }

    public function create(){
      $categories = Categories::all();
      return view('blog.create',compact('categories'));
    }

    public function edit($id){
        $blog=Lastblog::findOrFail($id);
        $categories=Categories::all();
        return view('blog.edit',compact('blog','categories'));
    }

    public function update(Request $request,$id){
        $validate=$request->validate([
            'title'=>'required|string|min:5',
            'categories_id'=>'required|integer|exists:categories,id',
            'content'=>'required|string|min:10'
        ]);
        $blog=Lastblog::findOrFail($id);
        $blog->update($validate);
        return redirect()->route('index');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'title'=>'required|string|min:5',
            'categories_id'=>'required|integer|exists:categories,id',
            'content'=>'required|string|min:10'
        ]);
        $validate['user_id']=Auth::id();
        Lastblog::create($validate);
        return  redirect()->route('index')->with('message','blog posted successfully');
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        Auth::logout();
        return redirect()->route('login');
    }
    public function destroy($id){
      $blog=Lastblog::findOrFail($id);
      $blog->delete();  
      return redirect()->route('index');
    }
}
