<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'libelle',
        'dateCreate',
        'dateUpdate'

    ];


    public function member(){
        return $this->belongsTo('App\Models\member');
    }


    public function Post(){
        return $this->belongsToMany('App\Models\Post');
    }


    public function Article(){
        return $this->belongsToMany('App\Models\Article');
    }
}
