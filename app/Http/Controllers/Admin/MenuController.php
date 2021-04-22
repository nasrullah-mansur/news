<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FooterMenu;
use App\Models\Admin\MainMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('admin.menu.index');
    }


    public function mainMenuEdit()
    {
        $menu_items = MainMenu::orderBy('ordering')->get();
        return view('admin.menu.main_menu_edit', compact('menu_items'));
    }


    public function footerMenuEdit()
    {
        $menu_items = FooterMenu::orderBy('ordering')->get();
        return view('admin.menu.footer_menu_edit', compact('menu_items'));
    }

    public function mainMenuUpdate(Request $request)
    {

        foreach($request->main_menu as $mainMenuList){
            if($mainMenuList['pl_label'] == null || $mainMenuList['sl_label'] == null || $mainMenuList['url'] == null || $mainMenuList['ordering'] == null ) {
                return redirect()->back()->withErrors(['msg', 'The Message']);
            }
        }

        MainMenu::truncate();

        foreach($request->main_menu as $mainMenuList){
            $mainMenu = new MainMenu();
            $mainMenu->pl_label = $mainMenuList['pl_label'];
            $mainMenu->sl_label = $mainMenuList['sl_label'];
            $mainMenu->url = $mainMenuList['url'];
            $mainMenu->ordering = $mainMenuList['ordering'];
            $mainMenu->menu_id = 1;
            $mainMenu->save();
        }

        return redirect()->back()->with('update', 'Main Menu successfully updated');

    }

    public function footerMenuUpdate(Request $request)
    {
        foreach($request->footer_menu as $footerMenuList){
            if($footerMenuList['pl_label'] == null || $footerMenuList['sl_label'] == null || $footerMenuList['url'] == null || $footerMenuList['ordering'] == null ) {
                return redirect()->back()->withErrors(['msg', 'The Message']);
            }
        }

        FooterMenu::truncate();

        foreach($request->footer_menu as $footerMenuList){
            $mainMenu = new FooterMenu();
            $mainMenu->pl_label = $footerMenuList['pl_label'];
            $mainMenu->sl_label = $footerMenuList['sl_label'];
            $mainMenu->url = $footerMenuList['url'];
            $mainMenu->ordering = $footerMenuList['ordering'];
            $mainMenu->menu_id = 1;
            $mainMenu->save();
        }

        return redirect()->back()->with('update', 'Main Menu successfully updated');
    }
}
