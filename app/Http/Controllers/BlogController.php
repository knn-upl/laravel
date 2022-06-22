<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use JavaScript;


class BlogController extends Controller
{
    function getSingle($slug){

        $post = Post::where('slug','=',$slug)->with('category')->first();

        JavaScript::put([
            'post' => $post,
        ]);

        return view('blog.single');
    }


    function getIndex(){
        $posts = Post::paginate(5);
        return view('blog.index')
        ->withPosts($posts);
    }
}
