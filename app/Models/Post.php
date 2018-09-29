<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
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


    public function Theme(){
        return $this-> belongsTo('App\Models\Theme');
    }
    public function Subtheme(){
        return $this-> belongsTo('App\Models\Subtheme');
    }
    public function member(){
        return $this->belongsTo('App\Models\member');
    }

    public function Subject(){
        return $this->belongsTo('App\Models\Subject');
    }

    public function Response_Post(){
        return $this-> hasMany('App\Models\Response_Post');
    }

    public function Tag(){
        return $this->belongsToMany('App\Models\Tag');
    }



}
