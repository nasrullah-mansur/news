<?php

namespace Database\Seeders;

use App\Models\Admin\SubscriberSection;
use Illuminate\Database\Seeder;

class SubscriberSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubscriberSection::create([
            'pl_title' => 'Welcome Our Newsletter',
            'sl_title' => 'Welcome Our Newsletter',
            'pl_text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ',
            'sl_text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ',
        ]);
    }
}
