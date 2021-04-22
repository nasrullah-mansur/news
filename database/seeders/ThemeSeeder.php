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
            'logo' => 'front/images/logo.png',
            'footer_logo' => 'front/images/footer-logo.png',
            'favicon' => 'front/images/favicon.png',
            'google_map' => 'Google Map',
            'copyright' => '&copy; All right reserved.',

            'pl_flag' => 'front/images/flag.png',
            'sl_flag' => 'front/images/flag.png',
            'pl_name' => 'English',
            'sl_name' => 'Bangla',
        ]);
    }
}
