<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_info extends Model
{
    protected $fillable = [
        'nickname',
        'racket',
        'shoes',
        'address',
        'user_id',
    ];
    
    public function user()
        {
            return $this->belongsTo('App\User', 'user_id');
        }
}
