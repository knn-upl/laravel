<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    function getSingle($slug){
        $post = Post::where('slug','=',$slug)->first();
        return view('blog.single')->withPost($post);
    }

    
    function getIndex(){
        $posts = Post::paginate(5);
        dd($posts);
        return view('blog.index')
        ->withPosts($posts);
    }
}
