<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageTestController extends Controller
{
    public function index(Post $post, Request $req){
        return view('users_infos/image_test/index');
    }
    
    public function store(Post $post, Request $req){
        
        $post->fill($req['post']);
        
        $post->save();
        
        if(!empty($req->file('img'))){
            $file = $req->file('img');
            $path = $file->store('public/profile');
        
            $save_path = str_replace('public/', '', $path);
        }
        
        return redirect('/image_test');
    }
}
