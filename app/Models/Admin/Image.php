<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_one',
        'image_two',
        'image_three',
        'image_four',
        'image_five',
    ];

    protected $appends = ['image_one'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setImageOneAttribute($value)
    {
        $this->attributes['image_one'] = 'news/image_one/' . $value;
    }

    public function setImageTwoAttribute($value)
    {
        $this->attributes['image_two'] = 'news/image_two/' . $value;
    }

    public function setImageThreeAttribute($value)
    {
        $this->attributes['image_three'] = 'news/image_three/' . $value;
    }

    public function setImageFourAttribute($value)
    {
        $this->attributes['image_four'] = 'news/image_four/' . $value;
    }

    public function setImageFiveAttribute($value)
    {
        $this->attributes['image_five'] = 'news/image_four/' . $value;
    }



    protected static function boot()
    {
        parent::boot();
        static::creating(function ($image) {
            $image->user_id = Auth::user()->id;
        });

        static::updating(function ($image) {
            $image->user_id = Auth::user()->id;
        });

    }
}


