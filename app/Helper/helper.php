<?php

use Carbon\Carbon;
use App\Models\Admin\News;
use App\Models\Admin\Page;
use App\Models\Admin\Theme;
use Illuminate\Support\Str;
use App\Models\Admin\Footer;
use App\Models\Admin\Social;
use App\Models\Admin\Wizard;
use App\Models\Notification;
use App\Models\Admin\Profile;
use App\Models\Admin\Visitor;
use App\Models\Admin\Category;
use App\Models\Admin\CustomCode;
use App\Models\Admin\MainMenu;
use App\Models\Front\AddPlace;
use App\Models\Admin\FooterMenu;
use App\Models\Admin\Translation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;



function ImageUpload($new_file, $path, $old_image) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $file_name = time() . '_' . $new_file->getClientOriginalName();
    $destinationPath = public_path($path);


    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    $new_file->move($destinationPath, $file_name);

    return $file_name;

};


function allNotifications()
{
    return Notification::whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->get();
}


function ResizeImageUpload($new_file, $path, $old_image, $w, $h) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $destinationPath = public_path($path);
    $file_name =  time() . '_' . $new_file->getClientOriginalName();

    $path = str_replace('\\','/', public_path());

    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    Image::make($new_file)
    ->fit($w, $h)
    ->save($destinationPath . $file_name);

    return $file_name;

};


function user_name_slug($user_name)
{
    return Str::slug($user_name, '-');
}

function AuthUserProfileInfo()
{
   return $AuthUserProfileInfo = Profile::where('user_id', Auth::guard(Session::get('role'))->user()->id)->firstOrFail();
}

function Categories()
{
    return Category::with('news', 'subCategory')->where('p_id', 0)->get();
}

function subCatNews($id)
{
    return News::where('sub_category_id', $id)->get();
}

function MainMenu()
{
    return MainMenu::orderBy('ordering')->get();
}

function FooterMenu()
{
    return FooterMenu::orderBy('ordering')->get();
}


function active_lang()
{
    if(session()->exists('active_language')) {
        $active_lang = session('active_language');
    } else {
        $active_lang = 'pl';
    }

    return $active_lang;
}

function translate()
{
    return Translation::first();
}

function newsCount()
{
    return Wizard::first();
}

function ThemeSetting()
{
    return Theme::first();
}

function Footer()
{
   return Footer::first();
}

function FooterGallery()
{
    $category_id = Footer()->images_from;
    $image_count = Footer()->image_count;
    $footer_gallery = News::where('category_id', $category_id)->with('image')->limit($image_count)->get();

    return $footer_gallery;

}

function HeadingStyle($data)
{
    $value = explode(' ', $data);
    $value[count($value) - 1] = '<span>' . $value[count($value) - 1] . '</span>';
    return implode(' ', $value);
}

function SocialMedia()
{
    return Social::all();
}

function MostVisitedNews($count)
{
    return Visitor::with('news')->orderBy('created_at', 'DESC')->limit($count)->get();
}

function MostRecentPost($count)
{
    return News::with('user','category','image', 'comment')->orderBy('created_at', 'DESC')->limit($count)->get();
}


function indexOneAdd()
{
    return AddPlace::where('type', 2)->inRandomOrder()->limit(1)->get();
}

function indexTwoAdd()
{
    return AddPlace::where('type', 1)->inRandomOrder()->limit(1)->get();
}


function singleNewsAdd()
{
    return AddPlace::where('type', 3)->inRandomOrder()->limit(1)->get();
}

function sidebarAdd()
{
    return AddPlace::where('type', 4)->inRandomOrder()->limit(1)->get();
}


function pageSeoInfo($slug)
{
    return Page::where('slug', $slug)->firstOrFail();
}


function customCSS()
{
    return CustomCode::first()->css;
}

function customJS()
{
    return CustomCode::first()->js;
}


?>
