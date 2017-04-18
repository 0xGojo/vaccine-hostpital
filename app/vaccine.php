<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\loaivacxin;
class vaccine extends Model
{
    public function loaivaccine(){
      return $this->belongsto('App\loaivacxin');
    }
    public function ketquatiems(){
      return $this->hasMany('App\ketquatiem');
    }
}
