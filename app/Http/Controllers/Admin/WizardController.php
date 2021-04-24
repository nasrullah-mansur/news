<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Wizard;
use Illuminate\Http\Request;

class WizardController extends Controller
{
    public function edit()
    {
        $wizard = Wizard::first();
        return view('admin.wizard.edit', compact('wizard'));
    }

    public function update(Request $request)
    {
        $wizard = Wizard::first();

        $request->validate([
            'trending_news_count' => 'required',
            'sport_news_count' => 'required',
            'entertainment_news_count' => 'required',
            'video_news_count' => 'required',
            'news_per_page' => 'required',
            'recent_news_count' => 'required',
            'related_news_count' => 'required',
            'popular_news_count' => 'required',
            'search_result_count' => 'required',
        ]);

        $wizard->trending_news_count = $request->trending_news_count;
        $wizard->sport_news_count = $request->sport_news_count;
        $wizard->entertainment_news_count = $request->entertainment_news_count;
        $wizard->video_news_count = $request->video_news_count;
        $wizard->news_per_page = $request->news_per_page;
        $wizard->recent_news_count = $request->recent_news_count;
        $wizard->related_news_count = $request->related_news_count;
        $wizard->popular_news_count = $request->popular_news_count;
        $wizard->search_result_count = $request->search_result_count;

        $wizard->save();

        return redirect()->route('admin.wizard.edit')->with('update', 'Updated successful');
    }
}
