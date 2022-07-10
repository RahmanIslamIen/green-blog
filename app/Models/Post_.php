<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
        "title" => "judul post pertama",
        "author" => "Rahman Islam",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut praesentium mollitia ipsam aliquid magnam, 
        est nesciunt quae laboriosam obcaecati voluptas facere reprehenderit ullam nihil delectus cum repellat excepturi 
        minima aliquam."    
        ],
        [
            "title" => "judul post kedua",
            "author" => "Enty Chan",
            "slug" => "judul-post-kedua",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut veniam autem labore perspiciatis, neque, 
            est dolorem dolorum id mollitia vero dolores eum voluptatibus ipsa dolor pariatur dicta odit nihil corrupti! 
            Laboriosam deleniti reprehenderit suscipit unde labore perspiciatis explicabo, quas minima recusandae necessitatibus 
            ipsa sint exercitationem iste, veritatis non itaque architecto consectetur voluptates. Modi facilis numquam, 
            voluptatem accusantium, fuga sunt iusto perferendis totam alias esse adipisci earum? Consequatur eos, illo facere 
            sit, nam quam expedita distinctio placeat reprehenderit laborum aliquid veniam quis mollitia esse voluptatibus 
            neque delectus animi eaque inventore recusandae? Eos aliquam excepturi officiis perferendis adipisci itaque, ex 
            asperiores iste."    
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
