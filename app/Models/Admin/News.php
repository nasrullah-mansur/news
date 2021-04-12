<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Image;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'tags',

        // PL;
        'pl_headline',
        'pl_slug',
        'pl_details',
        'pl_seo_title',

        // SL;
        'sl_headline',
        'sl_slug',
        'sl_details',
        'sl_seo_title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'news_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($news) {
            $news->user_id = Auth::user()->id;
        });

        static::updating(function ($news) {
            $news->user_id = Auth::user()->id;
        });

    }
}
