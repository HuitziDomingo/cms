<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->limit(6)->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->limit(6)->get();
        $pages = Post::orderBy('id','DESC')->where('post_type','page')->limit(6)->get();
        return view('admin.index',['categories' => $categories,'posts' => $posts, 'pages' => $pages]);
    }
}
