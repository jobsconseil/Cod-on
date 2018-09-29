<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{

    use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nbreEtoile',
        'libelle',
        'dateCreate',
        'dateUpdate'
    ];



    public function Article(){
        return $this->belongsToMany('App\Models\Article');
    }
}
