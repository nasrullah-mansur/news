<?php

namespace Database\Seeders;

use App\Models\Admin\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id' => 1,
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'profile' => 'avatar-s-1.png',
            'banner' => '22.jpg',
        ]);
    }
}
