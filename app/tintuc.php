<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\loaitintuc;
use App\canbo;
class tintuc extends Model
{
    public function loaitintuc(){
      return $this->belongstoMany('App\loaitintuc','App\canbo');
    }
}
