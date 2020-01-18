<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class MenuSection extends Model
{
    protected $table = "menu_section";

    public function languageIso(){
        return $this->belongsToMany(language::class);

    }
}
