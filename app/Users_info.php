<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_info extends Model
{
    public function user()
        {
            return $this->belongsTo('App\User');
        }
}
