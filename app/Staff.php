<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Staff extends Authenticatable
{
    protected $guard = "admins";
    protected $table="staff";
    protected $fillable = ['email', 'password','level'];
    protected $hidden = [
        'password', 'remember_token',
    ];

}
