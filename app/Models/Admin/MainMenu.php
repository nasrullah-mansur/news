<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'pl_label',
        'sl_label',
        'url',
        'ordering',
    ];
}
