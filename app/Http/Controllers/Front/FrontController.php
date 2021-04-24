<?php

namespace App\Http\Controllers\Front;

use App\Models\Admin\Faq;
use App\Models\Admin\News;
use App\Models\Admin\Page;
use Illuminate\Http\Request;
use App\Models\Admin\Comment;
use App\Models\Admin\Visitor;
use App\Models\Admin\Category;
use App\Models\Admin\BreakingNews;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\SubscriberSection;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::with('news')->get();
        $breakingNews = BreakingNews::latest()->get();
        $trendingNews = News::with('image', 'user', 'category','comment')->where('type_id', 1)->limit(newsCount()->trending_news_count)->get()->reverse();
        $worldNews = News::with('image', 'user', 'category', 'comment')->where('type_id', 2)->limit(newsCount()->world_news_count)->get()->reverse();
        $SportNews = News::with('image', 'user', 'category')->where('type_id', 3)->limit(newsCount()->sport_news_count)->get()->reverse();
        $EntertainmentNews = News::with('image', 'user', 'category')->where('type_id', 4)->limit(newsCount()->entertainment_news_count)->get()->reverse();
        $VideoNews = News::where('video', '!=', null)->limit(newsCount()->video_news_count)->get()->reverse();
        $subscriber = SubscriberSection::firstOrFail();

        $top_news = Visitor::with('news')->orderBy('visitor', 'DESC')->limit(2)->get();

        return view('front.index', compact('categories', 'trendingNews', 'worldNews', 'SportNews', 'EntertainmentNews', 'VideoNews', 'breakingNews', 'top_news', 'subscriber'));
    }


    public function singleNews($slug)
    {
        $news = News::with('user', 'category', 'image')->where('pl_slug', $slug)->orWhere('sl_slug', $slug)->firstOrFail();

        $relatedNews = News::where('category_id', $news->category_id)->orderBy('created_at', 'DESC')
            ->with('category', 'comment', 'image')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $comments = Comment::with('reply')->where('p_id', 0)->where('news_id', $news->id)->get();

        $visitor = Visitor::where('news_id', $news->id)->firstOrFail();
        $visitor->visitor += 1;
        $visitor->save();

        return view('front.single_news', compact('news', 'relatedNews', 'comments'));
    }


    public function category($slug)
    {
       $most_visited_news = DB::table('visitors')
        ->orderBy('visitor', 'DESC')
        ->limit(newsCount()->related_news_count)
        ->join('news', 'news.id', '=', 'visitors.news_id')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->join('images', 'news.id', '=', 'images.news_id')
        ->select('visitors.id', 'news.*', 'categories.pl_name', 'categories.pl_slug as pl_cat_slug', 'categories.sl_name', 'categories.sl_slug as sl_cat_slug', 'images.image_four', 'images.image_alt')
        ->get();

        $cat = Category::where('pl_slug', $slug)->orWhere('sl_slug', $slug)->firstOrFail();
        $allNewsByCat = News::with('category', 'image', 'comment')->where('category_id', $cat->id)->orderBy('created_at', 'DESC')->limit(newsCount()->news_per_page)->paginate(newsCount()->news_per_page);
        return view('front.category', compact('cat', 'allNewsByCat', 'most_visited_news'));
    }


    public function privacy()
    {
        $privacy_content = Page::where('slug', 'privacy-policy')->firstOrFail();
        return view('front.privacy', compact('privacy_content'));
    }


    public function cookies()
    {
        $cookies_content = Page::where('slug', 'cookies')->firstOrFail();
        return view('front.cookies', compact('cookies_content'));
    }


    public function contact()
    {
        return view('front.contact');
    }

    public function request_add()
    {
        return view('front.request_add');
    }


    public function faq()
    {
        $faqs = Faq::all();
        return view('front.faq', compact('faqs'));
    }

}
