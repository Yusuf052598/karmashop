<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Shops extends Model
{
    protected $fillable=[
        'category_id','name','body','status','img'
    ];
    protected $casts=[
        'name'=>'array',
        'body'=>'array',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
    public function slugName(){
        $slug=Str::slug($this->name['uz']);
        return $slug;
    }
    public function check($auth,$id)
    {
        $likes=Likes::with('shops')
            ->where('user_id','=',$auth)
            ->where('shop_id','=',$id)
            ->get();
        if ($likes->isEmpty()){
            return 0;
        }
        else{
            if ($likes[0]->likes=='active'){
                return 1;
            }
            else{
                return 0;
            }
        }

    }
}
