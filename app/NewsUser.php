<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsUser extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'news_id', 'user_id', 'flag'
    ];
    /*
    public function new() {
        return $this->belongsToMany('App\New', 'news_id');
    }

    public function user() {
        return $this->belongsToMany('App\User', 'user_id');
    }*/
}
