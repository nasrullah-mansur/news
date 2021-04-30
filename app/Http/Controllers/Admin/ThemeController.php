<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function edit()
    {
        $theme = Theme::first();
        return view('admin.theme.edit', compact('theme'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'theme_name' => 'required',
            'logo' => 'mimes:png,jpg,jpeg,gif',
            'footer_logo' => 'mimes:png,jpg,jpeg,gif',
            'pl_flag' => 'mimes:png,jpg,jpeg,gif',
            'pl_name' => 'required',
            'sl_name' => 'required',
            'sl_flag' => 'mimes:png,jpg,jpeg,gif',
            'favicon' => 'mimes:png,jpg,jpeg,gif',
            'google_map' => 'required',
            'google_map_script' => 'required',
            'pl_address' => 'required',
            'sl_address' => 'required',
            'pl_support_hour' => 'required',
            'sl_support_hour' => 'required',
            'quick_contact' => 'required',
            'copyright' => 'required',
        ]);

        $theme = Theme::first();

        $theme->theme_name = $request->theme_name;

        // return $request->favicon->getClientOriginalName();
        if($request->has('logo')) {
            $theme->logo = ImageUpload($request->logo, 'front/images/', $theme->logo);
        }

        if($request->has('footer_logo')) {
            $theme->footer_logo = ImageUpload($request->footer_logo, 'front/images/', $theme->footer_logo);
        }

        if($request->has('pl_flag')) {
            $theme->pl_flag = ImageUpload($request->pl_flag, 'front/images/', $theme->pl_flag);
        }

        if($request->has('sl_flag')) {
            $theme->sl_flag = ImageUpload($request->sl_flag, 'front/images/', $theme->sl_flag);
        }

        if($request->has('favicon')) {
            $theme->favicon = ImageUpload($request->favicon, 'front/images/', $theme->favicon);
        }

        $theme->pl_name = $request->pl_name;
        $theme->sl_name = $request->sl_name;

        $theme->google_map = $request->google_map;
        $theme->google_map_script = $request->google_map_script;

        $theme->pl_address = $request->pl_address;
        $theme->pl_support_hour = $request->pl_support_hour;

        $theme->sl_address = $request->sl_address;
        $theme->sl_support_hour = $request->sl_support_hour;

        $theme->quick_contact = $request->quick_contact;
        $theme->copyright = $request->copyright;

        $theme->save();

        return redirect()->route('theme.edit')->with('update', 'Theme Info successfully updated');
    }
}
