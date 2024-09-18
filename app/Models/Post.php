<?php

namespace App\Models;

use Illuminate\Support\Arr;
class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array{
    //    return Arr::first(static::all(), function($post) use ($slug){
    //        return $post['slug'] == $slug;
    //    });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;
    }
}