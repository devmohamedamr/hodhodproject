<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
    protected $table = "sections";


    public function languageIso(){
        return $this->belongsToMany(language::class);
    }


}
