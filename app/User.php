<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable
{
use \Illuminate\Auth\Authenticatable;

use Notifiable;
    protected $table = 'users';// ten table trong database
    protected $fillable = ['id', 'name','email','email_verified_at','password'];
    public $timestamps = True; //thiet lap

}
