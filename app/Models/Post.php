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

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return  $query->where('title', 'like' , '%' . $search . '%')->orWhere('body', 'like' ,  '%' . $search. '%' ) ;
        }) ;

        $query->when($filters['category'] ?? false, function($query, $category){
           //join table category (cari postingan berdasarkan category)
           return $query->whereHas('category', function($query) use ($category) {
  $query->where('slug', $category);
           });
        }) ;
        $query->when($filters['author'] ?? false, function($query, $author){
           return $query->whereHas('author', function($query) use ($author) {
  $query->where('username', $author);
           });
        }) ;

    }

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
