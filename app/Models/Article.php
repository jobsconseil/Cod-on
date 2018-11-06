<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];


    public function Categorie(){
        return $this-> belongsTo('App\Models\Categorie');
    }
    public function Member(){
        return $this-> belongsTo('App\Models\Member');
    }

    public function Comment(){
        return $this-> hasMany('App\Models\Comment');
    }

    public function Ranking(){
        return $this->belongsToMany('App\Models\Ranking');
    }

    public function Tag(){
        return $this->belongsToMany('App\Models\Tag');
    }

    protected $table = 'Articles';

    public $timestamps = false;


}
