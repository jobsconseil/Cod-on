<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
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

    public function Article(){
        return $this-> hasMany('App\Models\Article');
    }

    public function Administrator(){
        return $this-> belongsTo('App\Models\ Administrator');
    }

    public function Comment(){
        return $this-> hasMany('App\Models\Comment');
    }
}
