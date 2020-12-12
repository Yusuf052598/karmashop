<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable=[
      'name','price','img'
    ];
    protected $casts=[
        'name'=>'array'
    ];
}
