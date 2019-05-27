<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';// ten table trong database
    protected $fillable = ['vehicleID', 'brand','partID','description','type_vehicleID','price','image'];
    public $timestamps = True; //thiet lap
}
