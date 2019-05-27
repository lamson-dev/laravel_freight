<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';// ten table trong database

    protected $fillable = ['partID', 'name','phone_number','address','email','logoImage','website'];

    public $timestamps = True; //thiet lap
}
