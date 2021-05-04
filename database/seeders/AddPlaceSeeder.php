<?php

namespace Database\Seeders;

use App\Models\Front\AddPlace;
use Illuminate\Database\Seeder;

class AddPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AddPlace::create([
            'image' => '1619761763_add-two.png',
            'type' => 1,
            'url' => '#',
            'name' => 'Home Page Small Add',
            'email' => 'admin@email.com',
            'phone' => '+1 (186) 284-8486',
            'address' => 'Add Holder Address Here',
        ]);

        AddPlace::create([
            'image' => '1619760807_add-one.png',
            'type' => 2,
            'url' => '#',
            'name' => 'Home Page Big Add',
            'email' => 'admin@email.com',
            'phone' => '+1 (186) 284-8486',
            'address' => 'Add Holder Address Here',
        ]);

        AddPlace::create([
            'image' => '1619760928_big-add-banner.png',
            'type' => 3,
            'url' => '#',
            'name' => 'Single News Page Add',
            'email' => 'admin@email.com',
            'phone' => '+1 (186) 284-8486',
            'address' => 'Add Holder Address Here',
        ]);

        AddPlace::create([
            'image' => '1619760967_widget-add-banner.png',
            'type' => 4,
            'url' => '#',
            'name' => 'Sidebar Add',
            'email' => 'admin@email.com',
            'phone' => '+1 (186) 284-8486',
            'address' => 'Add Holder Address Here',
        ]);

    }
}
