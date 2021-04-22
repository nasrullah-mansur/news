<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'facebook',
        'twitter',
        'linkedin',
        'profile',
        'banner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function setProfileAttribute($value)
    {
        $this->attributes['profile'] = 'user/profile/' . $value;
    }

    public function setBannerAttribute($value)
    {
        $this->attributes['banner'] = 'user/profile/' . $value;
    }

}
