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


        $SectionMenu = Section::withTranslations()->get();

        // dd($SectionMenu);
        $favoriteSection = Section::withTranslations()->where('section_favorite',1)->get();


        $favoriteMenu = Menu::withTranslations()->where('favorite',1)->first();

        // $favoriteSection = DB::table('sections')->where('language_iso',"$lang")->where('section_favorite',1)->get();

        // $favoriteMenu = DB::table('menu')->where('menu_language',"$lang")->where('favorite',1)->first();

        $sliders = Slider::withTranslations()->first();
            // dd($sliders);
        return view('front.layout',['sliders'=>$sliders,'lang'=>$lang,'blogs'=>$blogs,'favoriteMenu'=>$favoriteMenu,'favoriteSection'=>$favoriteSection,'SectionMenu'=>$SectionMenu]);
    }


    public function blog($lang,$id){
        \App::setLocale($lang);

        $blogdetalis = DB::table('blog')->where('id', $id)->first();
        return view('front.blogdetails',['lang'=>$lang,'blogdetalis'=>$blogdetalis]);
    }

    public function menuBySection($lang,$Section_id){
        \App::setLocale($lang);
        $menusectoion = MenuSection::all();
        $menus = Menu::withTranslations()->get();

        // dd($menusectoion);
        return view('front.menu',['lang'=>$lang,'menusection'=>$menusectoion,'menus'=>$menus]);

    }

    public function menuDetails($lang,$menu_id){
        \App::setLocale($lang);
    }


    public function menubycontry($lang,$contry_id){
        \App::setLocale($lang);
        $menus = Menu::withTranslations()->where('menu_category',$contry_id)->get();
        $menusectoion = MenuSection::all();

        // echo $contry_id;
        // dd($menu);
        return view('front.menucontry',['lang'=>$lang,'menusection'=>$menusectoion,'menus'=>$menus]);
    }

    public function contact($lang){
        \App::setLocale($lang);

        return view('front.contact',['lang'=>$lang]);
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
