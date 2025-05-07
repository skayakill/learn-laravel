<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [   
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'Author' => 'Dimas ukin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quibusdam magnam quasi doloribus, iste ex aliquid veritatis sint qui quae est explicabo, ea non necessitatibus? Repellendus adipisci aliquid atque dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi earum rerum sed? Velit laborum quasi qui, accusantium vero, dolorem cum adipisci minima, expedita voluptatibus vitae consequuntur neque placeat nulla a.'
             
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'Author' => 'Dimas ukin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vitae, aut quo asperiores numquam, alias illum necessitatibus quod minus voluptatem fugit rerum placeat cum dolor a labore quis earum quibusda Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusantium nostrum, quia sed ratione repellendus aliquam? Numquam, nemo iusto eaque repellendus vel laboriosam est dicta cum perferendis architecto reiciendis. Atque!.'
        ]
    ]]);
});

Route::get('/posts/{id}', function($id) {    
     $posts =  [   
        [
        'id' => 1,
        'title' => 'Judul Artikel 1',
        'Author' => 'Dimas ukin',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quibusdam magnam quasi doloribus, iste ex aliquid veritatis sint qui quae est explicabo, ea non necessitatibus? Repellendus adipisci aliquid atque dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi earum rerum sed? Velit laborum quasi qui, accusantium vero, dolorem cum adipisci minima, expedita voluptatibus vitae consequuntur neque placeat nulla a.'
         
    ],
    [
        'id' => 2,
        'title' => 'Judul Artikel 2',
        'Author' => 'Dimas ukin',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vitae, aut quo asperiores numquam, alias illum necessitatibus quod minus voluptatem fugit rerum placeat cum dolor a labore quis earum quibusda Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusantium nostrum, quia sed ratione repellendus aliquam? Numquam, nemo iusto eaque repellendus vel laboriosam est dicta cum perferendis architecto reiciendis. Atque!.'
    ]
    ];
    $post = Arr::first($posts, function( $post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title'=> 'single post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});
