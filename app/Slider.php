<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Slider extends Model
{
    protected $table = "slider";
    use Translatable;
    protected $translatable = ['slider_content'];
}
