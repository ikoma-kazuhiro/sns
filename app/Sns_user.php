<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sns_user extends Model
{
    public function sns_users_info()
    {
        return $this->belongsTo('App\Sns_users_info');
    }
}
