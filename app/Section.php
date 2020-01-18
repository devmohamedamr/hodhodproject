<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Section extends Model
{
    protected $table = "sections";
    use Translatable;
    protected $translatable = ['section_name', 'section_description'];
}
