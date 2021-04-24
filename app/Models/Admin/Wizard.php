<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wizard extends Model
{
    use HasFactory;

    protected $fillable = [
        'trending_news_count',
        'world_news_count',
        'sport_news_count',
        'entertainment_news_count',
        'video_news_count',
        'news_per_page',
        'recent_news_count',
        'related_news_count',
        'search_result_count',
    ];


}
