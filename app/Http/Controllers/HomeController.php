<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\blog;

class HomeController extends Controller
{
    public function index($lang){
        \App::setLocale($lang);
        $blogs = DB::table('blog')->where('language_iso', $lang)->get();

        $favoriteSection = DB::table('sections')->where('language_iso',"$lang")->where('section_favorite',1)->get();

        $favoriteMenu = DB::table('menu')->where('menu_language',"$lang")->where('favorite',1)->first();

        $sliders = Slider::all();
        return view('front.layout',['sliders'=>$sliders,'lang'=>$lang,'blogs'=>$blogs,'favoriteMenu'=>$favoriteMenu,'favoriteSection'=>$favoriteSection]);
    }


    public function blog($lang,$id){
        \App::setLocale($lang);

        $blogdetalis = DB::table('blog')->where('id', $id)->first();
        return view('front.blogdetails',['lang'=>$lang,'blogdetalis'=>$blogdetalis]);
    }

    public function menuBySection($lang,$Section_id){
        \App::setLocale($lang);

        return view('front.menu',['lang'=>$lang]);

    }

    public function menuDetails($lang,$menu_id){
        \App::setLocale($lang);
    }
}
