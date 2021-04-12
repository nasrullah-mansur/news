<?php
namespace   App\Services;

use App\Models\Admin\Category;
use App\Models\Admin\Image;
use App\Models\Admin\News;
use Illuminate\Support\Str;

class NewsService
{

    public function GetAllNews()
    {
        $news =  News::with('user', 'image', 'category')->get()->reverse();
        return datatables($news)
            ->addIndexColumn()
            ->addColumn('action', function ($news){
                return
                '<a class="btn btn-secondary edit-btn" href="#"><i class="edit-btn ft-eye"></i></a>
                <a class="btn btn-secondary edit-btn" href="'. route('admin.news.edit', $news->id) .'"><i class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$news->id.'"><i data-id="'.$news->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($news) {
                return $news->created_at->format('d-m-Y');
            })
            ->addColumn('image', function($news) {
                return '<img style="max-width: 80px" src="'. asset($news->image->image_four) . '" alt="{{ $news->image->image_alt }}">';
            })
            ->addColumn('category', function($news) {
                return $news->category->pl_name . '<br>' . $news->category->sl_name;
            })
            ->addColumn('author', function($news) {
                if(isset($news->user->name)) {
                    return $news->user->name;
                } else {
                    return 'Not Available';
                }
            })
            ->addColumn('created_by', function ($news) {
                return $news->user->name;
            })
            ->escapeColumns([])

            ->make(true);
    }

    public function GetAllNewsByAuthor($id)
    {
        $news =  News::with('user', 'image', 'category')->where('user_id', $id)->get()->reverse();
        return datatables($news)
            ->addIndexColumn()
            ->addColumn('action', function ($news){
                return
                '<a class="btn btn-secondary edit-btn" href="#"><i class="edit-btn ft-eye"></i></a>
                <a class="btn btn-secondary edit-btn" href="'. route('admin.news.edit', $news->id) .'"><i class="edit-btn ft-edit"></i></a>
                <a class="btn btn-danger delete-btn" href="#" data-id="'.$news->id.'"><i data-id="'.$news->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($news) {
                return $news->created_at->format('d-m-Y');
            })
            ->addColumn('image', function($news) {
                return '<img style="max-width: 80px" src="'. asset($news->image->image_four) . '" alt="{{ $news->image->image_alt }}">';
            })
            ->addColumn('category', function($news) {
                return $news->category->pl_name . '<br>' . $news->category->sl_name;
            })
            ->addColumn('author', function($news) {
                if(isset($news->user->name)) {
                    return $news->user->name;
                } else {
                    return 'Not Available';
                }
            })
            ->addColumn('created_by', function ($news) {
                return $news->user->name;
            })
            ->escapeColumns([])

            ->make(true);
    }



    public function store($request)
    {

        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];

        // PL;
        $newsData['pl_headline'] = $request->pl_headline;
        $newsData['pl_slug'] = Str::slug($request->pl_headline , '-');
        $newsData['pl_details'] = $request->pl_details;
        if($request->pl_seo_title == null) {
            $newsData['pl_seo_title'] = $request->pl_headline;
        } else {
            $newsData['pl_seo_title'] = $request->pl_seo_title;
        }

        $newsData['pl_seo_tag'] = $request->pl_seo_tag;
        $newsData['pl_seo_description'] = $request->pl_seo_description;

        // SL;
        $newsData['sl_headline'] = $request->sl_headline;
        $newsData['sl_slug'] = Str::slug($request->sl_headline , '-');
        $newsData['sl_details'] = $request->sl_details;

        if($request->sl_headline != null) {
            if($request->sl_seo_title == null) {
                $request->sl_seo_title = $request->sl_headline;
            } else {
                $newsData['sl_seo_title'] = $request->sl_seo_title;
            }
        }
        $newsData['sl_seo_tag'] = $request->sl_seo_tag;
        $newsData['sl_seo_description'] = $request->sl_seo_description;

        $newsData['category_id'] = $request->category;
        $newsData['video'] = $request->video;
        $newsData['tags'] = implode(',' ,$request->tag);

        $news = News::create($newsData);

        $image = new Image();
        $image->image_one = ResizeImageUpload($request->image, 'news/image_one/', null, 1110, 495);
        $image->image_two = ResizeImageUpload($request->image, 'news/image_two/', null, 625, 265);
        $image->image_three = ResizeImageUpload($request->image, 'news/image_three/', null, 340, 200);
        $image->image_four = ResizeImageUpload($request->image, 'news/image_four/', null, 190, 160);

        $image->image_alt = $request->image_alt;

        $image->news_id = $news->id;

        $image->save();

        if ($news) {
            $data['success'] = true;
            $data['message'] = __('News Successfully added');
            $data['data'] = $news;
            return $data;
        }

        return $data;
    }


    public function update($request, $news)
    {
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];

        // PL;
        $newsData['pl_headline'] = $request->pl_headline;
        $newsData['pl_slug'] = Str::slug($request->pl_headline , '-');
        $newsData['pl_details'] = $request->pl_details;
        if($request->pl_seo_title == null) {
            $newsData['pl_seo_title'] = $request->pl_headline;
        } else {
            $newsData['pl_seo_title'] = $request->pl_seo_title;
        }

        $newsData['pl_seo_tag'] = $request->pl_seo_tag;
        $newsData['pl_seo_description'] = $request->pl_seo_description;

        // SL;
        $newsData['sl_headline'] = $request->sl_headline;
        $newsData['sl_slug'] = Str::slug($request->sl_headline , '-');
        $newsData['sl_details'] = $request->sl_details;

        if($request->sl_headline != null) {
            if($request->sl_seo_title == null) {
                $request->sl_seo_title = $request->sl_headline;
            } else {
                $newsData['sl_seo_title'] = $request->sl_seo_title;
            }
        }
        $newsData['sl_seo_tag'] = $request->sl_seo_tag;
        $newsData['sl_seo_description'] = $request->sl_seo_description;

        $newsData['category_id'] = $request->category;
        $newsData['video'] = $request->video;
        $newsData['tags'] = implode(',' ,$request->tag);

        $news_update = $news->update($newsData);

        if($request->has('image')) {
            $image = Image::where('news_id', $news->id)->firstOrFail();
            $image->delete();
            $image = new Image();
            $image->image_one = ResizeImageUpload($request->image, 'news/image_one/', null, 1110, 495);
            $image->image_two = ResizeImageUpload($request->image, 'news/image_two/', null, 625, 265);
            $image->image_three = ResizeImageUpload($request->image, 'news/image_three/', null, 340, 200);
            $image->image_four = ResizeImageUpload($request->image, 'news/image_four/', null, 190, 160);

            $image->image_alt = $request->image_alt;
            $image->news_id = $news->id;
            $image->save();
        }


        if ($news) {
            $data['success'] = true;
            $data['message'] = __('News Successfully added');
            $data['data'] = $news;
            return $data;
        }

        return $data;

    }


    public function destroy($id)
    {
        $data = ['success' =>false, 'code' =>404, 'data' =>[], 'message' =>'something went wrong'];
        $news = News::where('id', $id)->firstOrFail();
        $news_delete = $news->delete();

        $image = Image::where('news_id', $id)->firstOrFail();
        $image->delete();

        if ($news_delete) {
            $data['success'] = true;
            $data['message'] = __('News Successfully added');
            $data['data'] = $news;
            return $data;
        }

        return $id;
    }




}