<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomCode;
use Illuminate\Http\Request;

class CustomCodeController extends Controller
{
    public function css()
    {
        $css = CustomCode::first()->css;
        return view('admin.custom_code.css', compact('css'));
    }


    public function css_update(Request $request)
    {
        $css = CustomCode::first();
        $css->css = $request->css;
        $css->save();
        return redirect()->route('custom.css')->with('update', 'CSS successfully updated');

    }

    public function js()
    {
        $js = CustomCode::first()->js;
        return view('admin.custom_code.js', compact('js'));
    }

    public function js_update(Request $request)
    {
        $js = CustomCode::first();
        $js->js = $request->js;
        $js->save();
        return redirect()->route('custom.js')->with('update', 'JS successfully updated');
    }
}
