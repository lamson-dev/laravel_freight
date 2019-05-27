<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_details';// ten table trong database
    protected $fillable = ['bill_deID', 'price','quantity','begin_journey','end_journey'];
    public $timestamps = True; //thiet lap
}
