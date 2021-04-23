<?php

namespace Database\Seeders;

use App\Models\Admin\MainMenu;
use Illuminate\Database\Seeder;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Home',
            'sl_label' => 'Home SL',
            'url' => '/',
            'ordering' => 1
        ]);
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Sports',
            'sl_label' => 'Sports SL',
            'url' => '/news/category/sports',
            'ordering' => 2
        ]);
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Health',
            'sl_label' => 'Health SL',
            'url' => '/news/category/health',
            'ordering' => 3
        ]);
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Life Style',
            'sl_label' => 'Life Style SL',
            'url' => '/news/category/life-style',
            'ordering' => 4
        ]);
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Business',
            'sl_label' => 'Business SL',
            'url' => '/news/category/business',
            'ordering' => 5
        ]);
    }
}
