<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tintuc;
class canbo extends Model
{
    public function tintucs()
    {
      return $this->hasMany('App\tintuc');
    }
}
