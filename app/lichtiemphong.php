<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\doituong;
use App\loaivacxin;
use App\ketquatiem;
class lichtiemphong extends Model
{
  public function doituong(){
    return $this->belongsto('App\category','categories_nice_actions');
}
public function loaivanccine(){
  return $this->belongsto('App\loaivacxin');
}
public function ketquatiems(){
  return $this->hasMany('App\ketquatiem');
}
}
