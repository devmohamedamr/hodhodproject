<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SubSection extends Model
{
    protected $table = "sub_section";
    public function languageIso(){
        return $this->belongsToMany(language::class);
    }
    public function sectionId(){
        return $this->belongsToMany(Section::class);
    }
}
