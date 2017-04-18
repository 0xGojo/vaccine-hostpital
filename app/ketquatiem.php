<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lichtiemphong;
use App\khachtiem;
use App\vaccine;
class ketquatiem extends Model
{
  public function ketqua(){
      return $this->belongsToMany('App\lichtiemphong','App\khachtiem','App\vaccine');
  }

}
