<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home",
    ]

    );
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Artikel Pertama",
            "author" => "Wakwaw Portable",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deleniti numquam commodi adipisci! Quos in sit quam delectus explicabo minus error aperiam officia doloremque a ipsam quia, maxime nam impedit assumenda velit temporibus itaque harum ab iure! Porro quo neque nemo aut libero incidunt assumenda at, officiis soluta enim ipsam delectus distinctio nihil iure accusantium sequi a temporibus odit laudantium dolores placeat tempora minus. Placeat vitae odit sequi temporibus quo ad cum aliquid praesentium minus, enim libero. Aliquid, dolorem architecto!",
    
        ],
    
        [
            "title" => "Artikel Kedua",
            "author" => "Wakwaw Kunyuk",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deleniti numquam commodi adipisci! Quos in sit quam delectus explicabo minus error aperiam officia doloremque a ipsam quia, maxime nam impedit assumenda velit temporibus itaque harum ab iure! Porro quo neque nemo aut libero incidunt assumenda at, officiis soluta enim ipsam delectus distinctio nihil iure accusantium sequi a temporibus odit laudantium dolores placeat tempora minus. Placeat vitae odit sequi temporibus quo ad cum aliquid praesentium minus, enim libero. Aliquid, dolorem architecto!",
    
        ],
    
    
        ];




    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts,
    ]);
});
