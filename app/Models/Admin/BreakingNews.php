<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'pl_breaking_news',
        'sl_breaking_news',
        'url',
        'status',
    ];
}
