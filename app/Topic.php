<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    //
    use softDeletes;

    protected  $fillable = [
        'topic'
    ];
}
