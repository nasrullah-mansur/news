<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
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
        $categories = Category::where('p_id', 0)->with('news')->get();
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
        if(!$request->main_menu) {
            MainMenu::truncate();
            return redirect()->back()->with('update', 'Main Menu successfully updated');
        } else{

            foreach($request->main_menu as $mainMenuList){
                if($mainMenuList['category_id'] == null || $mainMenuList['ordering'] == null ) {
                    return redirect()->back()->withErrors(['msg', 'The Message']);
                }
            }

            MainMenu::truncate();

            foreach($request->main_menu as $mainMenuList){
                $mainMenu = new MainMenu();
                $mainMenu->category_id = $mainMenuList['category_id'];
                $mainMenu->ordering = $mainMenuList['ordering'];
                $mainMenu->menu_id = 1;
                $mainMenu->save();
            }

            return redirect()->back()->with('update', 'Main Menu successfully updated');
        }

    }

    public function footerMenuUpdate(Request $request)
    {

        if(!$request->footer_menu) {
            FooterMenu::truncate();
            return redirect()->back()->with('update', 'Main Menu successfully updated');
        } else {
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
}
