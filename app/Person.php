<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='persons';
    protected $hidden='password';


    public function PersonType()
    {
        return $this->belongsTo('App\PersonType');
    }
}
