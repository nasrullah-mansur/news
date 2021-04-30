<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPlace extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'type',
        'url',
        'name',
        'email',
        'phone',
        'address',
    ];

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = 'adds/' . $value;
    }
}
