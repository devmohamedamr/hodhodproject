<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Page extends Model
{
    protected $table = 'pages';
    use Translatable;
    protected $translatable = ['page_name'];

}
