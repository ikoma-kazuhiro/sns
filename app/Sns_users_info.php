<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sns_users_info extends Model
{
    public function sns_user()   
    {
        return $this->hasOne('App\Sns_user');  
    }
}
