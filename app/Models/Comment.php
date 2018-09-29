<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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



    public function Article(){
        return $this-> belongsTo('App\Models\Article');
    }
    public function Categoie(){
        return $this-> belongsTo('App\Models\Categoie');
    }
    public function member(){
        return $this->belongsTo('App\Models\Member');
    }

    public function Response_Commenr(){
        return $this-> hasMany('App\Models\Response_Comment');
    }

}
