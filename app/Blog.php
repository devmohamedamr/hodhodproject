<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    protected $table = "blog";

    public function languageIso(){
        return $this->belongsToMany(language::class);

    }
}
