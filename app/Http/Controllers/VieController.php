<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\URL; 


class VieController extends Controller
{
     public function sliderController()
    {
    	$post = Post::where('trash',false)->latest()->take(6)->get();
    	return view('vie.slide',[

          'postslide' => $post
    	]);

    }
}
