<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'social_name',
        'social_link',
        'icon_class',
        'followers'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($social) {
            $social->user_id = Auth::guard(Session::get('role'))->user()->id;
        });

        static::updating(function ($social) {
            $social->user_id = Auth::guard(Session::get('role'))->user()->id;
        });

    }
}
