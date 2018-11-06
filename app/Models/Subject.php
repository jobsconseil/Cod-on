<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
        'description',
        'resolu',
        'dateCreate',
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

    public function Post(){
        return $this-> hasMany('App\Models\Post');
    }
}
