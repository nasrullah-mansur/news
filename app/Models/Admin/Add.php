<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'address',
        'name',
        'number',
        'message',
        'file',
    ];


    public function setFileAttribute($value)
    {
        $this->attributes['file'] = 'add/request/' . $value;
    }
}
