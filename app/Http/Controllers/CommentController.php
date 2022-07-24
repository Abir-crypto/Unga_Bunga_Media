<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getAllComments(){
        return Comment::all();
    }
    public function getComment(Comment $comment){
        return $comment;
    }

    public function createComment(Request $request){
        $comment = Comment::create($request->only(['comment', 'post_id', 'user_id'])) ?: "not created";
        return $comment;
    }
}
