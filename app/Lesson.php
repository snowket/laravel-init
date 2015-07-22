<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table='lessons';
    protected $fillable=[
        'person_id',
        'subject_id',
        ];
    protected $hidden='';

    public function Person()
    {
        $this->belongsToMany('Person');
    }

    public function Subject()
    {
        $this->belongsTo('Subject');
    }
}
