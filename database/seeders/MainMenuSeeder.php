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
            'category_id' => 1,
            'ordering' => 1,
            'menu_id' => 1
        ]);

        MainMenu::create([
            'category_id' => 2,
            'ordering' => 2,
            'menu_id' => 1
        ]);

        MainMenu::create([
            'category_id' => 4,
            'ordering' => 3,
            'menu_id' => 1
        ]);
    }
}
