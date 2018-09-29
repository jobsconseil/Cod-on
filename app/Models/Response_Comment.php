<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Likeable;

class Response_Comment extends Model
{
    protected $fillable = [
        'content',
        'datePosts',
        'dateUpdate'
    ];


    public function Comment(){
        return $this-> belongsTo('App\Models\ Comment');
    }

    public function Member(){
        return $this-> belongsTo('App\Models\Member');
    }
}
