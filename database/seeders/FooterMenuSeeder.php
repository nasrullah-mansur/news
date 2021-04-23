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
            'menu_id' => 2,
            'pl_label' => 'Contact Us',
            'sl_label' => 'Contact Us SL',
            'url' => '/contact',
            'ordering' => 1
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Privacy & Policy',
            'sl_label' => 'Privacy & Policy SL',
            'url' => '/privacy-policy',
            'ordering' => 2
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Request For Add',
            'sl_label' => 'Request For Add SL',
            'url' => '/request-add',
            'ordering' => 3
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Cookies',
            'sl_label' => 'Cookies SL',
            'url' => '/cookies',
            'ordering' => 4
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Faq',
            'sl_label' => 'Faq SL',
            'url' => '/faq',
            'ordering' => 5
        ]);

    }
}
