<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'title', 'image', 'url', 'subtitle', 'newsSize_id', 'category_id'
    ];
    public function newsSize() {
        return $this->belongsTo('App\NewsSize', 'newsSize_id');
    }
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
