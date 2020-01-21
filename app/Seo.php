<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Seo extends Model
{
    protected $table = "seo";
    use Translatable;
    protected $translatable = ['description','keywords','canonical','oglocale','ogtype','ogtitle','ogdescription','ogurl','ogsite_name','ogimage','twittercard','twitterdescription','twittertitle','twitterimage'];

    public function pageId(){
        return $this->belongsToMany(SubSection::class);
    }
}
