<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class MenuSection extends Model
{
    protected $table = "menu_section";

    use Translatable;
    protected $translatable = ['section_title', 'section_description'];

    // public function menuId(){
    //     return $this->belongsToMany(SubSection::class);
    // }
}
