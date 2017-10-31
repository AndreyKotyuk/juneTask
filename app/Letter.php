<?php

namespace App;


class Letter extends Model
{
    protected $guarded=[
//        'userIp'
    ];

    public function user(){
        return $this->hasOne('App\user');
    }
}
