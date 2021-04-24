<?php

namespace Database\Seeders;

use App\Models\Admin\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'wizard_one_by' => 1,
            'wizard_one_count' => 3,
            'quick_link_count' => 5,
            'categories' => 5,
            'images_from' => 1,
            'image_by' => 1,
            'image_count' => 4,
        ]);
    }
}
