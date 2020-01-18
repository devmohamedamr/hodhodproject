<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Testimonial extends Model
{

    protected $table = "testimonials";
    use Translatable;
    protected $translatable = ['testimonial_name','testimonial_job','testimonial_details'];

}
