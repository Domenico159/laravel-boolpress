<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // Get blog posts

    public function index(){

        $posts = Post::paginate(3);

        return response()->json($posts);

    }


    // Show whit slug

    public function show($slug){

    //   dump($slug);

    $post = Post::where('slug' , $slug)->first();

    return response()->json($post);

    }
}
