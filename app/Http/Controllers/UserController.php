<?php

namespace App\Http\Controllers;

use App\Users_info;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;


class UserController extends Controller
{
    public function index(Users_info $users_info)
    {
        return view('users_infos/index');
    }
    
    public function show_detail_post(Post $post)
    {
        return view('users_infos/show_detail_post')->with(['post' => $post]);
    }
    
    public function create_post()
        {
            return view('users_infos/create_post');
        }
        
    public function store(Post $post, PostRequest $request)
        {
            $input = $request['post'];
            $post->fill($input)->save();
            return redirect()->action('UserController@index');
        }
        
    public function show_posts_list(Post $post)
    {
        
        return view('users_infos/show_posts_list')->with(['posts' => $post->get()]);
    }
    
    public function edit_post(Post $post)
    {
        return view('users_infos/edit_post')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/users_infos/' . $post->id);
    }
    
    public function edit_users_info(Users_info $users_info)
    {
        return view('/users_infos/edit_users_info')->with(['users_info' => $users_info]);
    }
}
