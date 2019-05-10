<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';// ten table trong database
    protected $fillable = ['billID', 'date','feedback','note','custID'];
    public $timestamps = True; //thiet lap
}
