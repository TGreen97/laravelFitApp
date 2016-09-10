<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    public function user(){
      return $this->belongsTo(Users::class);
      }
}
