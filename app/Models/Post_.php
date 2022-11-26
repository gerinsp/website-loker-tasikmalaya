<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            'title' => 'Post Pertama',
            'author' => 'Gerin',
            'slug' => 'post-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur illum nostrum qui voluptatem atque?'
        ],
        [
            'title' => 'Post Kedua',
            'author' => 'Sena',
            'slug' => 'post-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur illum nostrum qui voluptatem atque?'
        ]
    ];

    

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }

    public static function about()
    {
        return self::$about;
    }
}
