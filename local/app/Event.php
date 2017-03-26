<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     public $timestamps = false;

     public function event_name()
    {
        return $this->hasMany('App\Event_name',"id_event","id");
    }
}
