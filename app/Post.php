<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
    
    public function user()
        {
            return $this->belongsTo('App\User', 'id');
        }
        
    public function comments_post_id()
        {
            return $this->hasMany('App\Comment', 'post_id');
        }
    
    public function comments_comment_user_id()
        {
            return $this->hasMany('App\Comment', 'comment_user_id');
        }
}
