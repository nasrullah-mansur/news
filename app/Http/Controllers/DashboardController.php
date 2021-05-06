<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin\News;
use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Models\Admin\Visitor;
use App\Models\Admin\Category;
use Illuminate\Support\Carbon;
use App\Models\Admin\Subscriber;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $all_date = array();
        $all_news_count = array();
        for ($i = 14; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            array_push($all_date, $date->format('d-m-Y'));
            $news = News::whereDate('created_at', '=', Carbon::today()->subDays($i)->format('Y-m-d'))->count();
            array_push($all_news_count, $news);
        }
        $all_date = implode(",", $all_date);
        $all_news_count = implode(',', $all_news_count);
        $news_count = News::count();
        $category_count = Category::count();
        $user_count = User::count();
        $subscriber_count = Subscriber::count();
        $visitor_count = Visitor::get()->sum('visitor');
        $image_count = News::with('image')->orderBy('created_at', 'DESC')->where('video', null)->count();
        $video_count = News::with('image')->orderBy('created_at', 'DESC')->where('video', '!=', null)->count();
        $page_count = Page::count() + 3;
        return view('admin.dashboard.index', compact('all_news_count','all_date', 'news_count', 'category_count', 'user_count', 'subscriber_count', 'visitor_count', 'image_count', 'video_count', 'page_count'));
    }
}
