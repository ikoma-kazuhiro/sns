<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageTestController extends Controller
{
    public function index(Request $req){
        return view('users_infos/image_test/index');
    }
    
    public function store(Request $req){
        Log::debug('画像登録');
        if(!empty($req->file('img'))){
            Log::debug('画像登録２');
            $file = $req->file('img');
            $path = $file->store('public/profile');
            Log::debug($path);
            $save_path = str_replace('public/', 'storage/', $path);
            Log::debug($save_path);
        }
        
        return redirect('/image_test');
    }
    
    
}
