<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(){
        return Post::all();
    }
    public function getPost(Post $post){
        return $post;
    }

    public function createPost(Request $request){
        $post = Post::create($request->only(['title', 'content', 'user_id'])) ?: "not created";
        return $post;
    }
}
