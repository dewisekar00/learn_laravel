<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use App\Models\User ;
use App\Models\Category ;
class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug' , request('category'));
            $title = 'in ' . $category->name ;
        }
        if(request('author')){
            $author = User::firstWhere('username' , request('author'));
            $title = 'by ' . $author->username ;
        }
        return view('posts', [ 
            "title" => "All Posts  $title",
            "posts" =>  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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