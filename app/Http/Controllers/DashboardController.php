<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Page;
use App\Models\Admin\Subscriber;
use App\Models\Admin\Visitor;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $news_count = News::count();
        $category_count = Category::count();
        $user_count = User::count();
        $subscriber_count = Subscriber::count();
        $visitor_count = Visitor::get()->sum('visitor');
        $image_count = News::with('image')->orderBy('created_at', 'DESC')->where('video', null)->count();
        $video_count = News::with('image')->orderBy('created_at', 'DESC')->where('video', '!=', null)->count();
        $page_count = Page::count() + 3;
        return view('admin.dashboard.index', compact('news_count', 'category_count', 'user_count', 'subscriber_count', 'visitor_count', 'image_count', 'video_count', 'page_count'));
    }
}
