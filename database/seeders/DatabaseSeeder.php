<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

     
        // User::create([
        //     'name' => 'j anna',
        //     'email' => 'annaje@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
        //     'name' => 'shiro gum',
        //     'email' => 'shirgum@gmail.com',
        //     'password' => bcrypt('1234567'),
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'web progamming',
            'slug' => 'web-progamming',
        ]); 
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]); 
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]); 
        Post::factory(20)->create();

// Post::create([
//     'title' => 'Judul ke Satu',
//     'slug' => 'judul-ke-satu',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, mollitia beatae. Eos, distinctio. Atque deserunt qui accusamus ipsam officia ',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, mollitia beatae. Eos, distinctio. Atque deserunt qui accusamus ipsam officia incidunt beatae laudantium tenetur, exercitationem veniam rerum, natus eveniet fuga cupiditate! Quasi aliquam iure voluptates dicta quidem excepturi dolorum expedita autem ducimus magni dolore praesentium, repellendus optio? Soluta, ab adipisci doloremque, quibusdam dolorum laudantium autem nulla praesentium veniam tempore aperiam blanditiis eius cupiditate.</p> <p>vel tempora alias explicabo neque fugiat facilis aliquam ad. Numquam quis itaque quidem earum nostrum deleniti. Vitae dicta cumque sed maiores sint minus, temporibus exercitationem accusamus quaerat recusandae neque dolorem, quibusdam dignissimos consequatur accusantium ex animi consectetur harum.</p>',
//     'category_id' => 1 ,
//     'user_id' => 1
// ]);





    }
}
