<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function ActiveLanguage()
    {
        session()->put('active_language', 'sl');
        return redirect()->back();
    }


    public function DeActiveLanguage()
    {
        session()->forget('active_language');
        return redirect()->back();
    }
}
