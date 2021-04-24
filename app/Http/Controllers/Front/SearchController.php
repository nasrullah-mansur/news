<?php

namespace App\Http\Controllers\Front;

use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);

        return redirect()->route('search.result', $request->search);;
    }


    public function result($result) // all
    {
        $news = News::query()
            ->with('category', 'image','comment')
            ->where(function($query) use ($result){
                $query->where('tags', 'LIKE', '%'.$result.'%');
                $query->orWhere('pl_headline', 'LIKE', '%'.$result.'%');
                $query->orWhere('sl_headline', 'LIKE', '%'.$result.'%');
            })
            ->paginate(newsCount()->search_result_count);

            return view('front.search_result_all', compact('news', 'result'));
    }



    public function result_image($result) //image
    {
        $news = News::query()
            ->with('category', 'image','comment')
            ->where(function($query) use ($result){
                $query->where('video', null);
                $query->where('tags', 'LIKE', '%'.$result.'%');
            })
            ->orWhere(function($query) use ($result){
                $query->where('video', null);
                $query->where('pl_headline', 'LIKE', '%'.$result.'%');
            })
            ->orWhere(function($query) use ($result){
                $query->where('video', null);
                $query->where('sl_headline', 'LIKE', '%'.$result.'%');
            })
            ->paginate(newsCount()->search_result_count);

            return view('front.search_result_all', compact('news', 'result'));
    }



        public function result_video($result) //video
    {
        $news = News::query()
            ->with('category', 'image','comment')
            ->where(function($query) use ($result){
                $query->where('video', '!=', null);
                $query->where('tags', 'LIKE', '%'.$result.'%');
            })
            ->orWhere(function($query) use ($result){
                $query->where('video', '!=', null);
                $query->where('pl_headline', 'LIKE', '%'.$result.'%');
            })
            ->orWhere(function($query) use ($result){
                $query->where('video', '!=', null);
                $query->where('sl_headline', 'LIKE', '%'.$result.'%');
            })
            ->paginate(newsCount()->search_result_count);

            return view('front.search_result_all', compact('news', 'result'));
    }




}
