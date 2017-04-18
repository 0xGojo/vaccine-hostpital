<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lichtiemphong;
class doituong extends Model
{
  public function lichtiemphongs(){
    return $this->hasMany('App\lichtiemphong');
  }
}
