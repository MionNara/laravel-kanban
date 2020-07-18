<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //hasMany設定
    public function cards()
    {
        return $this->hasMany('App/Card');
    }
}
