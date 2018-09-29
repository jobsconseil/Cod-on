<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response_Post extends Model
{
    use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'datePosts',
        'dateUpdate'
    ];


    public function Post(){
        return $this-> belongsTo('App\Models\ Post');
    }

    public function Member(){
        return $this-> belongsTo('App\Models\Member');
    }
}
