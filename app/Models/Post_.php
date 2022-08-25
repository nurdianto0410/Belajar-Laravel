<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama" ,
            "slug" => "judul-post-pertama" ,
            "author" => "Imas Nurdianto" ,
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis possimus blanditiis dolorem laborum facere quo unde odio et consequatur adipisci, dolore cum, porro odit ab rem tenetur sunt. Provident impedit facere quasi modi porro libero iure, a dicta ab ad placeat numquam dolore voluptas id sed veniam consequuntur quam quis optio et quas ex. Neque deserunt quasi dolorem, iusto placeat cum ducimus? Nisi aut dicta sed laboriosam natus officia perferendis nemo maiores enim a? Nulla magnam corrupti error ut earum."
        ],
        [
            "title" => "Judul Post Kedua" ,
            "slug" => "judul-post-kedua" ,
            "author" => "Dhiya Adha" ,
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores mollitia similique facere vero, odio, excepturi ea repellendus veniam ex aliquam minima magni dolorum, asperiores quo. Laudantium ipsum culpa unde cumque incidunt odio consequuntur facilis dolores velit enim eius consectetur repudiandae aliquid facere voluptatem consequatur libero atque ab ducimus, nam repellendus. Provident pariatur repellendus odio fuga, odit distinctio placeat! Quia deleniti architecto cumque ipsum adipisci nisi suscipit, laborum illum ratione tempore repellat quod incidunt temporibus. Libero incidunt, quae autem quod magni impedit velit quas ad nisi dolorum minus sint officia ut recusandae molestias consequatur nesciunt vel, adipisci sunt qui animi pariatur? Aperiam ipsam deserunt sequi reprehenderit at, itaque, debitis saepe possimus vero, ducimus odio ipsa aliquid eos sunt consequuntur facere dolorum beatae. Molestiae possimus ex maiores commodi, blanditiis, atque hic repellendus, nemo cumque neque sequi quisquam reprehenderit? Ab aperiam vitae temporibus odit, eius quo a, saepe id in illum asperiores obcaecati omnis tempora iure maiores repellendus exercitationem reiciendis? Molestiae, ab! Neque tenetur nam sapiente magnam eius sequi quaerat, quia similique animi, officiis impedit ex incidunt earum numquam et, voluptatum soluta id. Perspiciatis quas at sequi ipsam ea sunt dolorum perferendis, vero ducimus facere, nobis dolores explicabo minima, obcaecati esse error! Fuga! .Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis possimus blanditiis dolorem laborum facere quo unde odio et consequatur adipisci, dolore cum, porro odit ab rem tenetur sunt. Provident impedit facere quasi modi porro libero iure, a dicta ab ad placeat numquam dolore voluptas id sed veniam consequuntur quam quis optio et quas ex. Neque deserunt quasi dolorem, iusto placeat cum ducimus? Nisi aut dicta sed laboriosam natus officia perferendis nemo maiores enim a? Nulla magnam corrupti error ut earum."
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
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug' , $slug);
    }
}
