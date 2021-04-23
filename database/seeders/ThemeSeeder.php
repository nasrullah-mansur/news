<?php

namespace Database\Seeders;

use App\Models\Admin\Theme;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'theme_name' => 'Theme Name',
            'logo' => 'logo.png',
            'footer_logo' => 'footer-logo.png',
            'favicon' => 'favicon.png',
            'google_map' => 'Google Map',
            'pl_address' => '<p>2972 Westheimer Rd. Santa  Illinois 85486 </p>',
            'pl_support_hour' => '<span>Sunday - Friday </span> <span>9.30pm  - 10 am  </span>',
            'sl_address' => '<p>2972 Westheimer Rd. Santa  Illinois 85486 </p>',
            'sl_support_hour' => '<span>Sunday - Friday </span> <span>9.30pm  - 10 am  </span>',
            'quick_contact' => ' <a href="#">Sport@eamplae.com</a> <p>[+88 ] -456 6632 3136</p>',
            'copyright' => '&copy; All right reserved.',

            'pl_flag' => 'flag.png',
            'sl_flag' => 'flag.png',
            'pl_name' => 'English',
            'sl_name' => 'Bangla',
        ]);
    }
}
