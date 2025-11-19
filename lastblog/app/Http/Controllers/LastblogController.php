<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class LastblogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function category(){
      $categories = Categories::all();
      return view('blog.index',compact('categories'));
    }
}
