<?php

namespace App\Models\Admin;

use App\Models\Admin\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'visitor'
    ];


    public function news()
    {
        return $this->belongsTo(News::class);
    }


}
