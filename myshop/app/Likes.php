<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $fillable=[
        'user_id','shop_id','likes'
    ];
    public function shops()
    {
        return $this->belongsTo(Shops::class);
    }
}
