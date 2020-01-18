<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Blog extends Model
{
    protected $table = "blog";

    public function languageIso(){
        return $this->belongsToMany(language::class);
    }
}
