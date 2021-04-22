<?php

namespace Database\Seeders;

use App\Models\Admin\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'slug' => '/',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'privacy-policy',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'request-add',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'cookies',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'faq',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'contact',
            'pl_title' => '',
            'sl_title' => '',
            'pl_description' => '',
            'sl_description' => '',
            'pl_content' => '',
            'sl_content' => '',
        ]);





    }
}
