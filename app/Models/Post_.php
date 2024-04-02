<?php

namespace App\Models;
class Post 
{
 private static $blog_posts = [
    [
        "title" => "how to be happy?",
        "slug" =>  "1",
        "author" => "anna sho",
        "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eaque iusto tempore quae quam, omnis velit facere incidunt reiciendis vitae delectus, vero molestias deleniti cumque praesentium maiores eveniet laborum magni!"
    ],
    [
        "title" => "there is happiness?",
        "slug" => "2" ,
        "author" => "anna sho",
        "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eaque iusto tempore quae quam, omnis velit facere incidunt reiciendis vitae delectus, vero molestias deleniti cumque praesentium maiores eveniet laborum magni!"
    ],
];

public static function all(){
    return collect(self::$blog_posts);
}
public static function find($slug){
    // ambil dulu semua postnya
    $posts = static::all();
  //lalu cari yang pertama ditemukan berdasarkan slug
    return $posts->firstWhere('slug' , $slug) ;
}
}
