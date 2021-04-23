<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'p_id',
        'name',
        'email',
        'phone',
        'comment',
    ];

    public function reply()
    {
        return $this->hasMany(Comment::class, 'p_id', 'id');
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
