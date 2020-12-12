<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $fillable=[
        'name','title','img'
    ];
    protected $casts=[
     'title'=>'array'
    ];
}
