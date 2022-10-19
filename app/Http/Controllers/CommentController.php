<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function show_comments(Post $post)
    {
        return view('users_infos/store_comment')->with(['post' => $post->first()]);
    }
    
    public function store(Comment $comment, Request $request)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        return redirect('/comments/' . $post->id);
    }
}
