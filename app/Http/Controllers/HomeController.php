<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\Blog;
use App\Section;
use App\Menu;
use App\MenuSection;
use App\SubSection;
use App\translations;
use App\Seo;
use App\Testimonial;
class HomeController extends Controller
{
    public function index($lang){
        \App::setLocale($lang);

        $blogs = blog::withTranslations()->get();

        $favoriteSection = Section::withTranslations()->where('section_favorite',1)->get();
        $seobysection = Seo::withTranslations()->where('page_id',18)->first();
        // $seobysection = '';

        // dd($seobysection);
        $favoriteMenu = Menu::withTranslations()->where('favorite',1)->first();

        $SectionMenu = Section::withTranslations()->get();

        $Testimonial = Testimonial::withTranslations()->get();


        $sliders = Slider::withTranslations()->first();
        return view('front.home',['sliders'=>$sliders,'seobysection'=>$seobysection,'lang'=>$lang,'blogs'=>$blogs,'favoriteMenu'=>$favoriteMenu,'favoriteSection'=>$favoriteSection,'SectionMenu'=>$SectionMenu,'Testimonial'=>$Testimonial]);
    }


    public function blog($lang,$id){
        \App::setLocale($lang);
        $SectionMenu = Section::withTranslations()->get();
        $seobysection = Seo::withTranslations()->where('page_id',18)->first();

        $sliders = Slider::withTranslations()->first();

        $blogdetalis = Blog::withTranslations()->where('id', $id)->first();
        return view('front.blogdetails',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'seobysection'=>$seobysection,'blogdetalis'=>$blogdetalis]);
    }

    public function menuBySection($lang,$Section_id){
        \App::setLocale($lang);

        $Section_name =  str_replace('-', ' ', strtolower($Section_id));
        if($lang == 'ar'){
            $section_by_section_name = SubSection::withTranslations()->where('section_name',$Section_name)->first();
            $section_id = $section_by_section_name['id'];

        }else{
            $section_by_section_name = translations::where('table_name','sub_section')->where('value',$Section_name)->first();
            $section_id = $section_by_section_name['foreign_key'];
        }

        $seobysection = Seo::withTranslations()->where('page_id',$section_id)->first();
        // dd($section_id );
        $menus = Menu::withTranslations()->where('menu_section',$section_id)->get();
        $menusectoion = MenuSection::all();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        if($section_id == 18 || $section_id == 19){
            return view('front.menucontry',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus,'seobysection'=>$seobysection]);

        }else{
            return view('front.menu',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus,'seobysection'=>$seobysection]);

        }
    }



    public function menubycontry($lang,$contry_id){
        \App::setLocale($lang);
        $menus = Menu::withTranslations()->where('menu_category',$contry_id)->get();
        $menusectoion = MenuSection::all();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        return view('front.menucontry',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus]);
    }


    public function menudetails($lang,$menu_id){

        \App::setLocale($lang);
        $menusectoion = MenuSection::all();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        $menu_details = Menu::withTranslations()->where('id',$menu_id)->first();

        // dd($menu_details);
        return view('front.menudetails',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menu_details'=>$menu_details]);
    }

    public function contact($lang){
        \App::setLocale($lang);
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        return view('front.contact',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu]);
    }

    public function about($lang){
        \App::setLocale($lang);

        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        return view('front.about',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu]);
    }

    public function contactsend(Request $request){
        dd($request);


    \Mail::send('emails.contactus',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ), function($message) use ($request)
    {
       $message->from('onlineinterviewquestions@gmail.com');
       $message->to('sharadjaiswal1411@gmail.com', 'Admin')->subject($request->get('subject'));
    });

    }

}
