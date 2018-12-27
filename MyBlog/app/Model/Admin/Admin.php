<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'crq_admin';

    protected $fillable=[
        'adminName','email','email_verified_at','password','remember_token'
    ];


    public function articles(){
        return $this->hasMany('App\Model\Article');
    }
}
