<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function edit()
    {
        $footer = Footer::first();
        $categories = Category::all();
        return view('admin.footer.edit', compact('footer', 'categories'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'wizard_one_by' => 'required',
            'wizard_one_count' => 'required',
            'categories' => 'required',
            'images_from' => 'required',
            'image_by' => 'required',
            'image_count' => 'required',
        ]);
        $footer = Footer::first();
        $footer->wizard_one_by = $request->wizard_one_by;
        $footer->wizard_one_count = $request->wizard_one_count;
        $footer->categories = implode(',', $request->categories);
        $footer->images_from = $request->images_from;
        $footer->image_by = $request->image_by;
        $footer->image_count = $request->image_count;
        $footer->save();
        return redirect()->back()->with('update', 'Successfully Updated');
    }
}
