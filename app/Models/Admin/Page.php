<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'pl_title',
        'sl_title',
        'pl_description',
        'sl_description',
        'pl_content',
        'sl_content',
    ];

}
