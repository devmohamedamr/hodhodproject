<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Section extends Model
{
    protected $table = "sections";


    public function languageIso(){
        return $this->belongsToMany(language::class);
    }


}
