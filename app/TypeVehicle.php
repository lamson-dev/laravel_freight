<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    protected $table = 'type_vehicles';// ten table trong database
    protected $fillable = ['type_vehicleID', 'type'];
    public $timestamps = True; //thiet lap
}
