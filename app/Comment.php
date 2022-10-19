<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'commnet_user_id',
        'name',
        'comment', 
    ];
    
    public function post_id()
        {
            return $this->belongsTo('App\Post', 'id');
        }
        
    public function post_user_id()
        {
            return $this->belongsTo('App\Post', 'user_id');
        }
}
