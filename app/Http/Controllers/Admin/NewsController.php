<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Services\NewsService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Admin\Category;
use App\Models\Image;

class NewsController extends Controller
{
    private $newsService;
    public function __construct(NewsService $newsService)
    {
        return $this->newsService = $newsService;
    }

    public function index()
    {
        return view('admin.news.index');
    }

    public function GetAllNews()
    {
        return $this->newsService->GetAllNews();
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(NewsRequest $request)
    {
        $news = $this->newsService->store($request);
        if ($news['success'] == true) {
            return redirect()->route('admin.news.index')->with('store', '');
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $news = News::where('id', $id)->firstOrFail();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(NewsRequest $request, $id)
    {
        $newsData = News::where('id', $id)->firstOrFail();
        $news = $this->newsService->update($request, $newsData);
        if ($news['success'] == true) {
            return redirect()->route('admin.news.index')->with('update', '');
        }
    }

    public function NewsByAuthor($id)
    {
        return $this->newsService->GetAllNewsByAuthor($id);
    }

    public function destroy($id)
    {
        $news = $this->newsService->destroy($id);
        if ($news['success'] == true) {
            return $id;
        }
    }
}
