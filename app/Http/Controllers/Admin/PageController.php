<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function all()
    {
        return view('admin.pages.all');
    }

    public function index_edit()
    {
        $page = Page::where('slug', '/')->firstOrFail();
        return view('admin.pages.index', compact('page'));
    }

    public function index_update(PageRequest $request)
    {
            $page = Page::where('slug', '/')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');

    }

    public function privacy_policy_edit()
    {
        $page = Page::where('slug', 'privacy-policy')->firstOrFail();
        return view('admin.pages.privacy', compact('page'));
    }

    public function privacy_policy_update(PageRequest $request)
    {

            $page = Page::where('slug', 'privacy-policy')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;
            $page->pl_content = $request->pl_content;
            $page->sl_content = $request->sl_content;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');
    }

    public function request_add_edit()
    {
        $page = Page::where('slug', 'request-add')->firstOrFail();
        return view('admin.pages.request_add', compact('page'));
    }


    public function request_add_update(PageRequest $request)
    {

            $page = Page::where('slug', 'request-add')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;
            $page->pl_content = $request->pl_content;
            $page->sl_content = $request->sl_content;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');
    }

    public function cookies_edit()
    {
        $page = Page::where('slug', 'cookies')->firstOrFail();
        return view('admin.pages.cookies', compact('page'));
    }

    public function cookies_update(PageRequest $request)
    {

            $page = Page::where('slug', 'cookies')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;
            $page->pl_content = $request->pl_content;
            $page->sl_content = $request->sl_content;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');
    }

    public function faq_edit()
    {
        $page = Page::where('slug', 'faq')->firstOrFail();
        return view('admin.pages.faq', compact('page'));
    }

    public function faq_update(PageRequest $request)
    {

            $page = Page::where('slug', 'faq')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');
    }

    public function contact_edit()
    {
        $page = Page::where('slug', 'contact')->firstOrFail();
       return view('admin.pages.contact', compact('page'));
    }

    public function contact_update(PageRequest $request)
    {

            $page = Page::where('slug', 'contact')->first();
            $page->pl_title = $request->pl_title;
            $page->sl_title = $request->sl_title;
            $page->pl_description = $request->pl_description;
            $page->sl_description = $request->sl_description;

            $page->save();

        return redirect()->back()->with('update', 'Successfully updated');
    }


}
