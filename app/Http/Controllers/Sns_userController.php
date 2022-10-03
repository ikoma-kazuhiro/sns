<?php

namespace App\Http\Controllers;

use App\Sns_user;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Sns_users_info;

class Sns_userController extends Controller
{
    public function index(Sns_user $sns_user)
    {
        return view('sns_users/index');
    }
    
    public function show_detail_post(Post $post)
    {
        return view('sns_users/show_detail_post')->with(['post' => $post]);
    }
    
    public function create_post()
        {
            return view('sns_users/create_post');
        }
        
    public function store(Post $post, PostRequest $request)
        {
            $input = $request['post'];
            $post->fill($input)->save();
            return redirect()->action('Sns_userController@index');
        }
        
    public function show_posts_list(Post $post)
    {
        
        return view('sns_users/show_posts_list')->with(['posts' => $post->get()]);
    }
    
    public function edit_post(Post $post)
    {
        return view('sns_users/edit_post')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/sns_users/' . $post->id);
    }
    
    public function edit_user_info(Sns_users_info $sns_users_info)
    {
        return view('/sns_users/edit_user_info')->with(['sns_users_info' => $sns_users_info]);
    }
    
    
}
