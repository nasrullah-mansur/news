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
            'pl_label' => 'home',
            'sl_label' => 'sl_home',
            'url' => '/',
            'ordering' => 1
        ]);
    }
}
