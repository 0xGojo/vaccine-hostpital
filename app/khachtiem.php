<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ketquatiem;
class khachtiem extends Model
{

  public function ketquatiems(){
    return $this->hasMany('App\ketquatiem');
  }
}
