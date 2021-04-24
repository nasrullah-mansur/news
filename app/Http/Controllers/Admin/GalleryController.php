<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\News;
use App\Models\Admin\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function images()
    {
        $image_gallery = News::with('image')->orderBy('created_at', 'DESC')->where('video', null)->paginate(16);
        return view('admin.gallery.image', compact('image_gallery'));
    }

    public function videos()
    {
        $video_gallery = News::with('image')->orderBy('created_at', 'DESC')->where('video', '!=', null)->paginate(16);
        return view('admin.gallery.video', compact('video_gallery'));
    }
}
