<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'bio',
        'experience',
        'location',
        'jobs',
        'recuperationEmail',

    ];


    public function Article(){
        return $this-> hasMany('App\Models\Article');
    }

    public function Comment(){
        return $this-> hasMany('App\Models\Comment');
    }

    public function Subject(){
        return $this-> hasMany('App\Models\Subject');
    }

    public function Post(){
        return $this-> hasMany('App\Models\Post');
    }

    public function Response_Post(){
        return $this-> hasMany('App\Models\Response_Post');
    }

    public function Response_Commenr(){
        return $this-> hasMany('App\Models\Response_Comment');
    }

    public function Tag(){
        return $this-> hasMany('App\Models\Tag');
    }
}
