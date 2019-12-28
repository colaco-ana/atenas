<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Search extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'text', 'image', 'user_id', 'searchType_id'
    ];
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function searchType() {
        return $this->belongsTo('App\SearchType', 'searchType_id');
    }
}
