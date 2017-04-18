<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\vaccine;
class loaivacxin extends Model
{
    public function vaccines(){
      return $this->hasMany('App\vaccine');
    }
}
