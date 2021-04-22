<?php

namespace Database\Seeders;

use App\Models\Admin\FooterMenu;
use Illuminate\Database\Seeder;

class FooterMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterMenu::create([
            'menu_id' => 1,
            'pl_label' => 'home',
            'sl_label' => 'sl_home',
            'url' => '/',
            'ordering' => 1
        ]);
    }
}
