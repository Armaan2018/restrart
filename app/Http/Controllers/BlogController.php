<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\URL; 

class BlogController extends Controller
{


	





    public function index()
    { 
    	$post = Post::where('trash',false)->latest()->paginate(9);
    	$sidebarpost = Post::where('trash',false)->latest()->take(6)->get();
    	$catno = Category::where('status',true)->count();
    	$tagno = Tag::where('status',true)->count();
    	$tagall = Tag::where('status',true)->latest()->get();
    	$catall = Category::where('status',true)->latest()->get();
    	return view('blog.blog',compact('post','catno','tagno','tagall','catall','sidebarpost'));
    }


    public function blogCatSearch($slug)
    {
        $cats = Category::where('slug',$slug)->first();
        $sidebarpost = Post::where('trash',false)->latest()->take(6)->get();
        $catno = Category::where('status',true)->count();
        $tagno = Tag::where('status',true)->count();
        $tagall = Tag::where('status',true)->latest()->get();
        $catall = Category::where('status',true)->latest()->get();
        return view('blog.blogcat',[
            'post' => $cats-> posts,
            'catno' => $catno,
            'tagno' => $tagno,
            'tagall' => $tagall,
            'catall' => $catall,
            'sidebarpost' => $sidebarpost,
            ]);

    }    

    public function blogTagSearch($slug)
    {
        $cats = Tag::where('slug',$slug)->first();
        $sidebarpost = Post::where('trash',false)->latest()->take(6)->get();
        $catno = Category::where('status',true)->count();
        $tagno = Tag::where('status',true)->count();
        $tagall = Tag::where('status',true)->latest()->get();
        $catall = Category::where('status',true)->latest()->get();
        return view('blog.blogcat',[
            'post' => $cats-> posts,
            'catno' => $catno,
            'tagno' => $tagno,
            'tagall' => $tagall,
            'catall' => $catall,
            'sidebarpost' => $sidebarpost,
            ]);

    }


    public function blogSingle($slug)
    {

        $singlepost = Post::where('slug',$slug)->first();
        $post = Post::where('trash',false)->latest()->paginate(9);
        $sidebarpost = Post::where('trash',false)->latest()->take(6)->get();
        $catno = Category::where('status',true)->count();
        $tagno = Tag::where('status',true)->count();
        $tagall = Tag::where('status',true)->latest()->get();
        $catall = Category::where('status',true)->latest()->get();
        return view('blog.blog-single',compact('post','catno','tagno','tagall','catall','sidebarpost','singlepost'));
    }

    public function searchPost(Request $request)
    {

        $search = $request -> searchname;

        $posts = Post::where('title','LIKE','%'.$search.'%')->latest()->paginate();


        $sidebarpost = Post::where('trash',false)->latest()->take(6)->get();
        $catno = Category::where('status',true)->count();
        $tagno = Tag::where('status',true)->count();
        $tagall = Tag::where('status',true)->latest()->get();
        $catall = Category::where('status',true)->latest()->get();
        return view('blog.blogcat',[
            'post' => $posts,
            'catno' => $catno,
            'tagno' => $tagno,
            'tagall' => $tagall,
            'catall' => $catall,
            'sidebarpost' => $sidebarpost,
            ]);
       
    }



}
