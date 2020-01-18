<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class ResturantCountry extends Model
{
    protected $table = "resturant_country";
    public function languageIso(){
        return $this->belongsToMany(language::class);
    }
}
