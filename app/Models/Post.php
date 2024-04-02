<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //3 properti yang boleh di isi bersamaan 
    // protected $fillable = ['title' , 'excerpt' , 'body'];
    // properti yang ngga boleh di ubah / di isi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    //menghubungkan model post dengan category
 // nama methodnya itu sama dengan modelnya
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
