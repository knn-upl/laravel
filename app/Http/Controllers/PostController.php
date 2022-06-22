<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
  

        return view('posts.index') ->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       $categories = Category::all();
        return  view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'         => 'required|max:255',
            'slug'          =>'required|alpha_dash|max:255|min:5',
            'category_id'   => 'required',
            'body'          => 'required',
            
    ));
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request -> slug;
        $post->category_id = $request -> category_id;
        $post->body = $request->body;
        $post->save();
        Session::flash('success','The blog post was succes fully save!');
        return redirect()->route('posts.show',$post -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show') -> with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $post= Post::find($id);
        if($request->input('slug') == $post->slug)
        {
            $this->validate($request,array(
                'title' => 'required|max:255',
                'category_id' => 'required',
                'body' => 'required',));
            }
        else{
            $this->validate($request,array(
                'title' => 'required|max:255',
                'category_id' => 'required',
                'slug'=>'required|alpha_dash|max:255|min:5|unique:posts,slug',
                'body' => 'required'));
            }
    $post = Post::find($id);
    $post->title= $request->input('title');
    $post->slug = $request->input('slug');
    $post->category_id = $request->input('category_id');
    $post->body = $request->input('body');
    $post->save();

    Session::flash('flash','This post was succesfully saved.');
    return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = Post::find($id);
        if($post != NULL){
            $post->delete();
            Session::flash('success', 'The post was succesfully deleted.');
            return redirect()->route('posts.index');
        }        
        Session::flash('error', 'Cannot find the post id.');
       return redirect()->route('posts');
    }
}
