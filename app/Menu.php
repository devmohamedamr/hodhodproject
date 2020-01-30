<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Menu extends Model
{
    protected $table = "menu";

    use Translatable;
    protected $translatable = ['menu_title', 'menu_description'];

    public function menuSection(){
        return $this->belongsToMany(SubSection::class);

    }

    public function menuCategory(){
        return $this->belongsToMany(MenuSection::class);

    }

    public function menuType(){
        return $this->belongsToMany(MenuType::class);
    }
}
