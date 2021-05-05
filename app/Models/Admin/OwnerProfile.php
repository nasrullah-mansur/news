<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
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
        $this->attributes['profile'] = 'owner/profile/' . $value;
    }

    public function setBannerAttribute($value)
    {
        $this->attributes['banner'] = 'owner/profile/' . $value;
    }
}
