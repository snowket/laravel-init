<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    protected $table='persontype';

    public function Person()
    {
       return $this->belongsToMany('App\Person');
    }
}
