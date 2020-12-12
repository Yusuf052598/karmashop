<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable=[
        'shop_id','city_id','name','status','last_name','email','tel','place','count'
    ];
    function shop(){
        return $this->belongsTo(Shops::class);
    }
    function city(){
        return $this->belongsTo(Cities::class);
    }

}
