<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme_name',
        'logo',
        'footer_logo',
        'pl_flag',
        'pl_name',
        'sl_name',
        'sl_flag',
        'favicon',
        'google_map',
        'copyright',
    ];


    public function setLogoAttribute($value)
    {
        $this->attributes['logo'] = 'front/images/' . $value;
    }

    public function setFooterLogoAttribute($value)
    {
        $this->attributes['footer_logo'] = 'front/images/' . $value;
    }

    public function setFaviconAttribute($value)
    {
        $this->attributes['favicon'] = 'front/images/' . $value;
    }

    public function setPlFlagAttribute($value)
    {
        $this->attributes['pl_flag'] = 'front/images/' . $value;
    }

    public function setSlFlagAttribute($value)
    {
        $this->attributes['sl_flag'] = 'front/images/' . $value;
    }
}
