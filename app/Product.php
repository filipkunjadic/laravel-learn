<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    // Here we wil write model relationshio
    // public function categories(){
    //   return $this->hasMany('App\Category');
    // }
}
