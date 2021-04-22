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
        $images = Image::latest()->paginate(16);

        return view('admin.gallery.image', compact('images'));
    }

    public function videos()
    {
        $videos = News::where('video', '!=', null)->orderBy('created_at', 'DESC')->paginate(16);

        return view('admin.gallery.video', compact('videos'));
    }
}
