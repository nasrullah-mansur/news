<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'pl_name',
        'pl_slug',

        'sl_name',
        'sl_slug'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            $category->user_id = Auth::user()->id;
        });
        static::updating(function ($category) {
            $category->user_id = Auth::user()->id;
        });
    }

    public function setPlNameAttribute($value)
    {
        $this->attributes['pl_name'] = strtolower($value);
    }

    public function setSlNameAttribute($value)
    {
        $this->attributes['Sl_name'] = strtolower($value);
    }

    public function getPlNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getSlNameAttribute($value)
    {
        return ucwords($value);
    }

    public function news()
    {
        return $this->HasMany(News::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
