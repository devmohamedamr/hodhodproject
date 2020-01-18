<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Blog extends Model
{
    protected $table = "blog";

    use Translatable;
    protected $translatable = ['blog_title','blog_content'];


}
