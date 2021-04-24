<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'pl_title',
        'sl_title',
        'pl_text',
        'sl_text',
    ];
}
