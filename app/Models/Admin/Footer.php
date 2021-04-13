<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'wizard_one_by',
        'wizard_one_count',
        'quick_link_count',
        'categories',
        'images_from',
        'image_by',
        'image_count',
    ];


}
