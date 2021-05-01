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
            'sl_label' => 'Contacto',
            'url' => '/contact',
            'ordering' => 1
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Privacy & Policy',
            'sl_label' => 'Política de privacidad',
            'url' => '/privacy-policy',
            'ordering' => 2
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Request For Add',
            'sl_label' => 'Solicitud para agregar',
            'url' => '/request-add',
            'ordering' => 3
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Cookies',
            'sl_label' => 'Galletas',
            'url' => '/cookies',
            'ordering' => 4
        ]);

        FooterMenu::create([
            'menu_id' => 2,
            'pl_label' => 'Faq',
            'sl_label' => 'Faq',
            'url' => '/faq',
            'ordering' => 5
        ]);

    }
}
