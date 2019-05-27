<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';// ten table trong database
    protected $fillable = ['custID', 'name','phone_number','address','email'];
    public $timestamps = True; //thiet lap
}
}
