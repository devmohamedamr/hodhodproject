<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $table = "menu";

    public function menuSection(){
        return $this->belongsToMany(Section::class);

    }

    public function menuLanguage(){
        return $this->belongsToMany(language::class);

    }

    public function menuCategory(){
        return $this->belongsToMany(MenuSection::class);

    }
}
