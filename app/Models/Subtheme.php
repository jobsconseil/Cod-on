<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Likeable;
class Subtheme extends Model
{

    protected $fillable = [
        'libelle',
        'description',
        'dateCreate',
        'dateUpdate'
    ];



    public function Theme(){
        return $this-> belongsTo('App\Models\Theme');
    }
    public function Administrator(){
        return $this-> belongsTo('App\Models\Administrator');
    }

    public function Subject(){
        return $this-> hasMany('App\Models\Subject');
    }
    public function Post(){
        return $this-> hasMany('App\Models\Post');
    }
}
