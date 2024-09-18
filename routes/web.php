<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'nama' => 'Wardatul Amalia Safitri']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Wardatul Amalia Safitri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis maxime, minus fugit odit quam error nam necessitatibus saepe? Eum voluptas saepe quos quibusdam obcaecati alias nisi natus reiciendis, nesciunt veniam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Wardatul Amalia Safitri',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, a atque corporis obcaecati neque ex commodi laboriosam enim veniam adipisci assumenda optio velit accusamus reprehenderit quisquam, cupiditate, impedit explicabo ad.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Wardatul Amalia Safitri',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis maxime, minus fugit odit quam error nam necessitatibus saepe? Eum voluptas saepe quos quibusdam obcaecati alias nisi natus reiciendis, nesciunt veniam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Wardatul Amalia Safitri',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, a atque corporis obcaecati neque ex commodi laboriosam enim veniam adipisci assumenda optio velit accusamus reprehenderit quisquam, cupiditate, impedit explicabo ad.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});