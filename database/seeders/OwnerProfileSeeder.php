<?php

namespace Database\Seeders;

use App\Models\Admin\OwnerProfile;
use Illuminate\Database\Seeder;

class OwnerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OwnerProfile::create([
            'owner_id' => 1,
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'profile' => 'avatar-s-1.png',
            'banner' => '22.jpg',
        ]);
    }
}
