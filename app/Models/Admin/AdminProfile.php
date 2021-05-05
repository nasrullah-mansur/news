<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
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
        $this->attributes['profile'] = 'admins/profile/' . $value;
    }

    public function setBannerAttribute($value)
    {
        $this->attributes['banner'] = 'admins/profile/' . $value;
    }
}
