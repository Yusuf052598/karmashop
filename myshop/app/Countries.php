<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable=[
     'name'
   ];
    protected $casts=[
        'name'=>'array'
    ];

}
