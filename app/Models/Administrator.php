<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    public function Categorie(){
        return $this-> hasMany('App\Models\Categorie');
    }

    public function Theme(){
        return $this-> hasmany('App\Models\Theme');
    }
    public function Subtheme(){
        return $this-> hasMany('App\Models\Subtheme');
    }
}
