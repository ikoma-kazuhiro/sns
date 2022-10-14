<?php

namespace App\Http\Controllers;

use App\Users_info;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\Users_infoRequest;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $users_info = Users_info::where('user_id', '=', Auth::user()->id)->first();
        return view('users_infos/index')->with(['users_info' => $users_info]);
    }
    
    public function show_detail_post(Post $post)
    {
        return view('users_infos/show_detail_post')->with(['post' => $post]);
    }
    
    public function create_post()
        {
            return view('users_infos/create_post');
        }
        
    public function store_post(Post $post, PostRequest $request)
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
    
    public function update_post(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/users_infos/' . $post->id);
    }
    
    public function edit_users_info(Users_info $users_info)
    {
        return view('/users_infos/edit_users_info')->with(['users_info' => $users_info]);
    }
    
    public function update_users_info(Request $request, Users_info $users_info)
    {
        $input_users_info = $request['users_info'];
        $users_info->fill($input_users_info)->save();
    
        return redirect('/users_infos/edit_users_info/' . $users_info->id);
    }
    
    public function create_users_info()
        {
            $user = Auth::user();
            return view('users_infos/create_users_info')->with(['user' => $user]);
        }
        
    public function store_users_info(Users_info $users_info, Request $request)
        {
            $input_users_info = $request['users_info'];
            $users_info->fill($input_users_info)->save();
            return redirect()->action('UserController@index');
        }
}
