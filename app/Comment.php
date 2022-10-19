<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment_user_id',
        'comment', 
    ];
    
    public function post()
        {
            return $this->belongsTo('App\Post', 'post_id', 'id');
        }
        
    public function commentUser()
        {
            return $this->belongsTo('App\User', 'comment_user_id', 'id')->with('usersInfo');
        }
}
