<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Event extends Model
{
    protected $table = "event";
    use Translatable;
    protected $translatable = ['event_title','event_description'];

}
