<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable=[
        'country_id','name'
    ];
    protected $casts=[
      'name'=>'array'
    ];
    public function country(){
        return $this->belongsTo(Countries::class);
    }
}
