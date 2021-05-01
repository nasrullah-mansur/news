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
            'pl_label' => 'Sports',
            'sl_label' => 'Deportes',
            'url' => '/news/category/sports',
            'ordering' => 2
        ]);
        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Health',
            'sl_label' => 'Salud',
            'url' => '/news/category/health',
            'ordering' => 3
        ]);

        MainMenu::create([
            'menu_id' => 1,
            'pl_label' => 'Business',
            'sl_label' => 'Negocio',
            'url' => '/news/category/business',
            'ordering' => 5
        ]);
    }
}
