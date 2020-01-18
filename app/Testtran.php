<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Testtran extends Model
{
    protected $table = 'testtrans';
    use Translatable;
    protected $translatable = ['title', 'description'];

}
