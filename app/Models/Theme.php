<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Likeable;

class Theme extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
        'description',
        'dateCreate',
        'dateUpdate'
    ];

    public function Administrator(){
        return $this-> belongsTo('App\Models\Admistrator');
    }
    public function Subtheme(){
        return $this-> hasMany('App\Models\Subtheme');
    }
    public function Subject(){
        return $this-> hasMany('App\Models\Subject');
    }

    public function Post(){
        return $this-> hasMany('App\Models\Post');
    }
}
