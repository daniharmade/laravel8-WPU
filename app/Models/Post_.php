<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Dani Harmade",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Error, dolorum ratione ex vero quis eos. Quidem fuga quas quam in minus.
                        Voluptatum perspiciatis quia obcaecati? Quos porro blanditiis repudiandae explicabo.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Error, dolorum ratione ex vero quis eos. Quidem fuga quas quam in minus.
                        Voluptatum perspiciatis quia obcaecati? Quos porro blanditiis repudiandae explicabo."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Harmade",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Error, dolorum ratione ex vero quis eos. Quidem fuga quas quam in minus.
                        Voluptatum perspiciatis quia obcaecati? Quos porro blanditiis repudiandae explicabo."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
