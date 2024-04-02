<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
class PostController extends Controller
{
    public function index(){
        return view('posts', [ "title" => "All Posts",
        // "posts" => Post::all()
        "posts" => Post::latest()->get()
      ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "single post",
            "post" =>$post
        ]);
    }
}


/*
public func biasanya dipake buat bikin method atau fungsi yang bisa diakses dari luar kelas atau objeknya 
*/