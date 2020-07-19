<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->get();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        return view('admin.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'thumbnail' => 'required',
            'title' => 'required|unique:posts',
            'details' => 'required',
            'category_id' => 'required',
        ],

        [
            'thumbnail.required' => 'Introducir URL de la Miniatura',
            'title.required' => 'Introducir titulo',
            'title.unique' => 'El titulo ya existe',
            'details.required' => 'Introduzca detalles',
            'category_id.unique' => 'Seleccione la categoria',
        ]);

        $post = new Post();
        $post->thumbnail = $request->thumbnail;
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->details = $request->details;
        $post->post_type = 'post';
        $post->slug = str_slug($request->slug);
        $post->is_published = $request->is_published;
        $post->save();

        $post->categories()->sync($request->category_id,false);

        Session::flash('message','Post creado Satisfactoriamente');
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
