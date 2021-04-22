<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\BreakingNews;
use App\Models\Admin\Category;
use App\Models\Admin\MainMenu;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::with('news')->get();
        $breakingNews = BreakingNews::latest()->get();
        $trendingNews = News::with('image', 'user', 'category')->where('type_id', 1)->limit(newsCount()->trending_news_count)->get()->reverse();
        $worldNews = News::with('image', 'user', 'category')->where('type_id', 2)->limit(newsCount()->world_news_count)->get()->reverse();
        $SportNews = News::with('image', 'user', 'category')->where('type_id', 3)->limit(newsCount()->sport_news_count)->get()->reverse();
        $EntertainmentNews = News::with('image', 'user', 'category')->where('type_id', 4)->limit(newsCount()->entertainment_news_count)->get()->reverse();
        $VideoNews = News::where('video', '!=', null)->limit(newsCount()->video_news_count)->get()->reverse();
        return view('front.index', compact('categories', 'trendingNews', 'worldNews', 'SportNews', 'EntertainmentNews', 'VideoNews', 'breakingNews'));
    }


    public function singleNews($slug)
    {
        $news = News::where('pl_slug', $slug)->orWhere('sl_slug', $slug)->firstOrFail();

        return view('front.single_news', compact('news'));
    }






}
