<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player_recruting extends Model
{
    protected $fillable = [
        'user_id',
        'recruting_title',
        'recruting_category',
        'venue',
        'from_dateime',
        'to_datetime',
        'sex',
        'min_age',
        'max_age',
        'game_history',
        'game_type_tori',
        'game_type_sdm',
        'shuttle_bringing',
        'entry_fee',
        'mood',
        'note',
    ];
    
    public function user()
        {
            return $this->belongsTo('App\User', 'user_id', 'id');
        }
}
