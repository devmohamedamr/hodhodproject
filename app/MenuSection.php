<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MenuSection extends Model
{
    protected $table = "menu_section";

    public function languageIso(){
        return $this->belongsToMany(language::class);

    }
}
