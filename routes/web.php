<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home' , [ "title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "sho",
        "email" => "anna@gmail.com"
    ]);
});




Route::get('/blog', [PostController::class , 'index']);


//halaman single post

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories' , 
function(Category $category){
    return view('categories' , [
        'title' => 'Post categories',
        'categories' => Category::All()
    ]);
}

);

// Route::get('/categories/{category:slug}' ,
// function(Category $category){
//     return view('posts' , [
//         'title' => "Post by Category: $category->name ",
//         'posts' => $category->posts->load('category' , 'author'),
//     ]);
// });


// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts' , [
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category' , 'author'),
//     ]);
// });
