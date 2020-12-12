<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Categories extends Model
{
    protected $fillable=[
        'name'
    ];

    protected $casts = [
        'name'=>'array'
    ];
    public function getRouteKey()
    {
        return 'name';
    }
    public function name(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->name['ru'];
                break;
            default:
                return $this->name['uz'];

        }
    }
}
