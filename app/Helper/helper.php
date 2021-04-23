<?php

use App\Models\Admin\News;
use App\Models\Admin\Theme;
use Illuminate\Support\Str;
use App\Models\Admin\Footer;
use App\Models\Admin\Wizard;
use App\Models\Admin\Profile;
use App\Models\Admin\Category;
use App\Models\Admin\MainMenu;
use App\Models\Admin\FooterMenu;
use App\Models\Admin\Social;
use App\Models\Admin\Translation;
use App\Models\Admin\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


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
    ->resize($w, $h)
    ->save($destinationPath . $file_name);

    return $file_name;

};


function user_name_slug($user_name)
{
    return Str::slug($user_name, '-');
}

function AuthUserProfileInfo()
{
   return $AuthUserProfileInfo = Profile::where('user_id', Auth::user()->id)->firstOrFail();
}



// echo Session::get('active_language');


function Categories()
{
    return Category::all();
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

function AllCategories()
{
    return Category::with('news')->get();
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


?>
