<?php

namespace App;


class Letter extends Model
{
    protected $guarded=[
//        'userIp'
    ];
//    protected $fillable=[
//      'userId',
//      'userName',
//        'userIp',
//        'HomePage',
//        'email',
//        'text',
//    ];

    public function user(){
        return $this->hasOne('App\user');
    }

   public function getRealIP()
   {

       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
           $ip = $_SERVER['HTTP_CLIENT_IP'];
       } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
       } else {
           $ip = $_SERVER['REMOTE_ADDR'];
       }
       return $ip;
   }
}
