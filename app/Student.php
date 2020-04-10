<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   public function fee()
   {
     return $this->hasMany('App\Fee'); 
   }
} 