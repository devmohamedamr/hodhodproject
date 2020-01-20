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

class HomeController extends Controller
{
    public function index($lang){
        \App::setLocale($lang);

        $blogs = blog::withTranslations()->get();
        // echo $blog->getTranslatedAttribute('blog_title', 'en');

        // foreach($posts as $post){
        //    echo $post->getTranslatedAttribute('blog_title', 'en');
        // }



        // dd($SectionMenu);
        $favoriteSection = Section::withTranslations()->where('section_favorite',1)->get();


        $favoriteMenu = Menu::withTranslations()->where('favorite',1)->first();

        // $favoriteSection = DB::table('sections')->where('language_iso',"$lang")->where('section_favorite',1)->get();

        // $favoriteMenu = DB::table('menu')->where('menu_language',"$lang")->where('favorite',1)->first();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();
            // dd($sliders);
        return view('front.home',['sliders'=>$sliders,'lang'=>$lang,'blogs'=>$blogs,'favoriteMenu'=>$favoriteMenu,'favoriteSection'=>$favoriteSection,'SectionMenu'=>$SectionMenu]);
    }


    public function blog($lang,$id){
        \App::setLocale($lang);
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        $blogdetalis = DB::table('blog')->where('id', $id)->first();
        return view('front.blogdetails',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'blogdetalis'=>$blogdetalis]);
    }

    public function menuBySection($lang,$Section_id){
        \App::setLocale($lang);

        $Section_name =  str_replace('-', ' ', strtolower($Section_id));

        $section_by_section_name = SubSection::withTranslations()->where('section_name',$Section_name)->first();
        $section_id = $section_by_section_name['id'];
        $menus = Menu::withTranslations()->where('menu_section',$section_id)->get();
        $menusectoion = MenuSection::all();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        if($section_id == 18 || $section_id == 19){
            return view('front.menucontry',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus]);

        }else{
            return view('front.menu',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus]);

        }
    }

    public function menuDetails($lang,$menu_id){
        \App::setLocale($lang);
    }


    public function menubycontry($lang,$contry_id){
        \App::setLocale($lang);
        $menus = Menu::withTranslations()->where('menu_category',$contry_id)->get();
        $menusectoion = MenuSection::all();
        $SectionMenu = Section::withTranslations()->get();

        $sliders = Slider::withTranslations()->first();

        return view('front.menucontry',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu,'menusection'=>$menusectoion,'menus'=>$menus]);
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

        return view('front.contact',['lang'=>$lang,'sliders'=>$sliders,'SectionMenu'=>$SectionMenu]);
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
