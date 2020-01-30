<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class MenuType extends Model
{
    protected $table = "menu_type";
    use Translatable;
    protected $translatable = ['title'];

}
