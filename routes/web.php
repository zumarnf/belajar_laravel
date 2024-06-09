<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Zumar', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog','posts' =>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel',
            'author' => 'Zumar',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Zumar',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.',
        ]
    ]]);
});

Route::get('/posts/{slug}' , function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel',
            'author' => 'Zumar',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Zumar',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos et cupiditate soluta explicabo sapiente quaerat odio recusandae omnis nesciunt optio libero, quasi quia possimus, expedita quos iusto quibusdam quae nobis.',
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
