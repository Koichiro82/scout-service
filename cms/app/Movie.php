<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * movieを所有するユーザを取得 user1人に属している
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}